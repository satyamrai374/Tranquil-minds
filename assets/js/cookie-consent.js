/*
 * Cookie consent banner.
 * The consent defaults (denied until the visitor accepts) are set inline in the
 * page <head>, before Google Tag Manager loads. This file shows the banner,
 * stores the visitor's choice and passes it to Google (Consent Mode v2) and
 * Microsoft Clarity.
 */
(function () {
  var STORAGE_KEY = "tm_cookie_consent";

  function getChoice() {
    try {
      return localStorage.getItem(STORAGE_KEY);
    } catch (e) {
      return null;
    }
  }

  function saveChoice(choice) {
    try {
      localStorage.setItem(STORAGE_KEY, choice);
    } catch (e) {}
  }

  function applyChoice(choice) {
    var state = choice === "granted" ? "granted" : "denied";

    window.dataLayer = window.dataLayer || [];
    if (typeof window.gtag !== "function") {
      window.gtag = function () { window.dataLayer.push(arguments); };
    }
    window.gtag("consent", "update", {
      ad_storage: state,
      ad_user_data: state,
      ad_personalization: state,
      analytics_storage: state
    });

    if (typeof window.clarity === "function") {
      window.clarity("consentv2", { ad_Storage: state, analytics_Storage: state });
    }
  }

  var css =
    "#tm-cookie-banner{position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:560px;margin-left:auto;" +
    "background:#fff;color:#374151;border:1px solid rgba(80,40,130,.12);border-radius:20px;" +
    "box-shadow:0 20px 50px -12px rgba(80,40,130,.35);padding:22px 24px;font-family:'Quicksand',system-ui,sans-serif;" +
    "font-size:14px;line-height:1.6;opacity:0;transform:translateY(16px);transition:opacity .35s ease,transform .35s ease}" +
    "#tm-cookie-banner.tm-show{opacity:1;transform:translateY(0)}" +
    "#tm-cookie-banner h2{margin:0 0 6px;font-size:16px;font-weight:700;color:#502882}" +
    "#tm-cookie-banner p{margin:0}" +
    "#tm-cookie-banner a{color:#502882;text-decoration:underline}" +
    "#tm-cookie-banner .tm-cc-actions{display:flex;gap:10px;margin-top:16px;flex-wrap:wrap}" +
    "#tm-cookie-banner button{flex:1 1 140px;cursor:pointer;border-radius:999px;padding:11px 18px;font:inherit;font-weight:700;" +
    "border:1px solid #502882;transition:background-color .2s,color .2s}" +
    "#tm-cookie-banner .tm-cc-accept{background:#502882;color:#fff}" +
    "#tm-cookie-banner .tm-cc-accept:hover{background:#3d1e64}" +
    "#tm-cookie-banner .tm-cc-reject{background:#fff;color:#502882}" +
    "#tm-cookie-banner .tm-cc-reject:hover{background:#F3F0F9}" +
    "#tm-cookie-banner button:focus-visible{outline:3px solid #8C78BE;outline-offset:2px}" +
    "@media (max-width:480px){#tm-cookie-banner{left:12px;right:12px;bottom:12px;padding:18px}}";

  function privacyUrl() {
    var path = window.location.pathname;
    var inSubdir = /^\/(landing|psychiatry|blog)\//.test(path);
    return (inSubdir ? "../" : "") + "privacy-policy.php";
  }

  function showBanner() {
    if (document.getElementById("tm-cookie-banner")) return;

    if (!document.getElementById("tm-cookie-style")) {
      var style = document.createElement("style");
      style.id = "tm-cookie-style";
      style.textContent = css;
      document.head.appendChild(style);
    }

    var banner = document.createElement("div");
    banner.id = "tm-cookie-banner";
    banner.setAttribute("role", "dialog");
    banner.setAttribute("aria-live", "polite");
    banner.setAttribute("aria-labelledby", "tm-cookie-title");
    banner.innerHTML =
      '<h2 id="tm-cookie-title">We value your privacy</h2>' +
      "<p>We use cookies to understand how visitors use our site and to measure our advertising. " +
      "You can accept or decline these cookies. See our <a href=\"" + privacyUrl() + "\">Privacy Policy</a>.</p>" +
      '<div class="tm-cc-actions">' +
      '<button type="button" class="tm-cc-reject">Decline</button>' +
      '<button type="button" class="tm-cc-accept">Accept</button>' +
      "</div>";

    function choose(choice) {
      saveChoice(choice);
      applyChoice(choice);
      banner.classList.remove("tm-show");
      setTimeout(function () {
        if (banner.parentNode) banner.parentNode.removeChild(banner);
      }, 350);
    }

    banner.querySelector(".tm-cc-accept").addEventListener("click", function () { choose("granted"); });
    banner.querySelector(".tm-cc-reject").addEventListener("click", function () { choose("denied"); });

    document.body.appendChild(banner);
    requestAnimationFrame(function () {
      requestAnimationFrame(function () { banner.classList.add("tm-show"); });
    });
  }

  // Lets a "Cookie Settings" link reopen the banner
  window.tmOpenCookieSettings = function () {
    showBanner();
    return false;
  };

  function init() {
    var choice = getChoice();
    if (choice === "granted" || choice === "denied") {
      applyChoice(choice);
    } else {
      applyChoice("denied");
      showBanner();
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
