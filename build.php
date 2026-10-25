<?php
/**
 * Build script for Netlify deployment
 * Generates static HTML files from PHP templates
 */

// Pages to build (source PHP file => output HTML file)
$pages = [
    'index.php' => 'index.html',
    'about.php' => 'about.html',
    'conditions.php' => 'conditions.html',
    'faq.php' => 'faq.html',
    'insurance.php' => 'insurance.html',
    'careers.php' => 'careers.html',
    'testimonials.php' => 'testimonials.html',
    'depression.php' => 'depression.html',
    'depression-assessment.php' => 'depression-assessment.html',
    'anxiety.php' => 'anxiety.html',
    'adhd.php' => 'adhd.html',
    'ptsd.php' => 'ptsd.html',
    'ocd.php' => 'ocd.html',
    'bipolar.php' => 'bipolar.html',
    'sleep-disorders.php' => 'sleep-disorders.html',
    'chronic-pain.php' => 'chronic-pain.html',
    'treatment-resistant-depression.php' => 'treatment-resistant-depression.html',
    'postpartum-depression.php' => 'postpartum-depression.html',
    'adolescent-mental-health.php' => 'adolescent-mental-health.html',
    'smoking-cessation.php' => 'smoking-cessation.html',
    'medication-management.php' => 'medication-management.html',
    'psychotherapy.php' => 'psychotherapy.html',
    'neurostar-tms.php' => 'neurostar-tms.html',
    'what-is-tms-therapy.php' => 'what-is-tms-therapy.html',
    'tms-adults.php' => 'tms-adults.html',
    'tms-adolescents.php' => 'tms-adolescents.html',
    'creyos.php' => 'creyos.html',
    'contact.php' => 'contact.html',
    'blog.php' => 'blog.html',
    'blog/index.php' => 'blog/index.html',
    'blog/how-does-neurostar-tms-work.php' => 'blog/how-does-neurostar-tms-work.html',
    'blog/is-ocd-a-disability.php' => 'blog/is-ocd-a-disability.html',
    'blog/is-neurostar-tms-therapy-safe.php' => 'blog/is-neurostar-tms-therapy-safe.html',
    'blog/does-medicaid-cover-psychotherapy.php' => 'blog/does-medicaid-cover-psychotherapy.html',
    'blog/how-to-get-more-patients.php' => 'blog/how-to-get-more-patients.html',
    'blog/tms-therapy-side-effects.php' => 'blog/tms-therapy-side-effects.html',
    'blog/tms-clinic-seo.php' => 'blog/tms-clinic-seo.html',
    'blog/is-tms-therapy-covered-by-medicare.php' => 'blog/is-tms-therapy-covered-by-medicare.html',
    'blog/tms-cost-insurance.php' => 'blog/tms-cost-insurance.html',
    'blog/how-tms-works.php' => 'blog/how-tms-works.html',
    'terms-of-service.php' => 'terms-of-service.html',
    'privacy-policy.php' => 'privacy-policy.html',
    'accessibility-statement.php' => 'accessibility-statement.html',
    'thankyou.php' => 'thankyou.html',
    'landing/index.php' => 'landing/index.html',
    'landing/thankyou.php' => 'landing/thankyou.html',
    'psychiatry/index.php' => 'psychiatry/index.html',
    'psychiatry/thankyou.php' => 'psychiatry/thankyou.html',
    // Local Service Areas, Hyperlocal & Targeted Hubs
    'locations.php' => 'locations.html',
    'tms-therapy-near-me.php' => 'tms-therapy-near-me.html',
    'best-tms-clinic-minnesota.php' => 'best-tms-clinic-minnesota.html',
    'insurance-covered-tms-therapy.php' => 'insurance-covered-tms-therapy.html',
    'neurostar-tms-provider-near-me.php' => 'neurostar-tms-provider-near-me.html',
    'tms-therapy-buffalo-mn.php' => 'tms-therapy-buffalo-mn.html',
    'tms-therapy-elk-river-mn.php' => 'tms-therapy-elk-river-mn.html',
    'tms-therapy-big-lake-mn.php' => 'tms-therapy-big-lake-mn.html',
    'tms-therapy-st-michael-albertville-mn.php' => 'tms-therapy-st-michael-albertville-mn.html',
    'tms-therapy-otsego-mn.php' => 'tms-therapy-otsego-mn.html',
    'tms-therapy-maple-grove-mn.php' => 'tms-therapy-maple-grove-mn.html',
    'tms-therapy-st-cloud-mn.php' => 'tms-therapy-st-cloud-mn.html',
    'tms-therapy-becker-mn.php' => 'tms-therapy-becker-mn.html',
    'tms-therapy-rogers-mn.php' => 'tms-therapy-rogers-mn.html',
    'depression-tms-therapy-buffalo-mn.php' => 'depression-tms-therapy-buffalo-mn.html',
    'ocd-treatment-elk-river-mn.php' => 'ocd-treatment-elk-river-mn.html',
    'anxiety-tms-treatment-big-lake-mn.php' => 'anxiety-tms-treatment-big-lake-mn.html',
    'treatment-resistant-depression-st-michael-mn.php' => 'treatment-resistant-depression-st-michael-mn.html',
    'adolescent-mental-health-tms-maple-grove-mn.php' => 'adolescent-mental-health-tms-maple-grove-mn.html',

    // 50 New Hyperlocal & Condition Pages
    'tms-therapy-monticello-mn.php' => 'tms-therapy-monticello-mn.html',
    'depression-tms-therapy-monticello-mn.php' => 'depression-tms-therapy-monticello-mn.html',
    'anxiety-treatment-monticello-mn.php' => 'anxiety-treatment-monticello-mn.html',
    'ocd-treatment-monticello-mn.php' => 'ocd-treatment-monticello-mn.html',
    'treatment-resistant-depression-monticello-mn.php' => 'treatment-resistant-depression-monticello-mn.html',
    'adolescent-tms-therapy-monticello-mn.php' => 'adolescent-tms-therapy-monticello-mn.html',
    'tms-therapy-albertville-mn.php' => 'tms-therapy-albertville-mn.html',
    'tms-therapy-delano-mn.php' => 'tms-therapy-delano-mn.html',
    'tms-therapy-annandale-mn.php' => 'tms-therapy-annandale-mn.html',
    'tms-therapy-maple-lake-mn.php' => 'tms-therapy-maple-lake-mn.html',
    'tms-therapy-clearwater-mn.php' => 'tms-therapy-clearwater-mn.html',
    'tms-therapy-rockford-mn.php' => 'tms-therapy-rockford-mn.html',
    'tms-therapy-hanover-mn.php' => 'tms-therapy-hanover-mn.html',
    'tms-therapy-montrose-mn.php' => 'tms-therapy-montrose-mn.html',
    'tms-therapy-howard-lake-mn.php' => 'tms-therapy-howard-lake-mn.html',
    'tms-therapy-cokato-mn.php' => 'tms-therapy-cokato-mn.html',
    'tms-therapy-zimmerman-mn.php' => 'tms-therapy-zimmerman-mn.html',
    'tms-therapy-princeton-mn.php' => 'tms-therapy-princeton-mn.html',
    'tms-therapy-clear-lake-mn.php' => 'tms-therapy-clear-lake-mn.html',
    'tms-therapy-sartell-mn.php' => 'tms-therapy-sartell-mn.html',
    'tms-therapy-sauk-rapids-mn.php' => 'tms-therapy-sauk-rapids-mn.html',
    'tms-therapy-waite-park-mn.php' => 'tms-therapy-waite-park-mn.html',
    'tms-therapy-st-joseph-mn.php' => 'tms-therapy-st-joseph-mn.html',
    'tms-therapy-cold-spring-mn.php' => 'tms-therapy-cold-spring-mn.html',
    'tms-therapy-ramsey-mn.php' => 'tms-therapy-ramsey-mn.html',
    'tms-therapy-anoka-mn.php' => 'tms-therapy-anoka-mn.html',
    'tms-therapy-champlin-mn.php' => 'tms-therapy-champlin-mn.html',
    'tms-therapy-coon-rapids-mn.php' => 'tms-therapy-coon-rapids-mn.html',
    'tms-therapy-dayton-mn.php' => 'tms-therapy-dayton-mn.html',
    'tms-therapy-plymouth-mn.php' => 'tms-therapy-plymouth-mn.html',
    'tms-therapy-osseo-mn.php' => 'tms-therapy-osseo-mn.html',
    'tms-therapy-corcoran-mn.php' => 'tms-therapy-corcoran-mn.html',
    'tms-therapy-greenfield-mn.php' => 'tms-therapy-greenfield-mn.html',
    'tms-therapy-medina-mn.php' => 'tms-therapy-medina-mn.html',
    'tms-therapy-wayzata-mn.php' => 'tms-therapy-wayzata-mn.html',
    'tms-therapy-long-lake-mn.php' => 'tms-therapy-long-lake-mn.html',
    'tms-therapy-minnetonka-mn.php' => 'tms-therapy-minnetonka-mn.html',
    'tms-therapy-mound-mn.php' => 'tms-therapy-mound-mn.html',
    'depression-tms-therapy-maple-grove-mn.php' => 'depression-tms-therapy-maple-grove-mn.html',
    'anxiety-treatment-maple-grove-mn.php' => 'anxiety-treatment-maple-grove-mn.html',
    'ocd-treatment-maple-grove-mn.php' => 'ocd-treatment-maple-grove-mn.html',
    'treatment-resistant-depression-maple-grove-mn.php' => 'treatment-resistant-depression-maple-grove-mn.html',
    'depression-tms-therapy-elk-river-mn.php' => 'depression-tms-therapy-elk-river-mn.html',
    'anxiety-treatment-elk-river-mn.php' => 'anxiety-treatment-elk-river-mn.html',
    'depression-tms-therapy-st-cloud-mn.php' => 'depression-tms-therapy-st-cloud-mn.html',
    'anxiety-treatment-st-cloud-mn.php' => 'anxiety-treatment-st-cloud-mn.html',
    'ocd-treatment-st-cloud-mn.php' => 'ocd-treatment-st-cloud-mn.html',
    'depression-tms-therapy-rogers-mn.php' => 'depression-tms-therapy-rogers-mn.html',
    'anxiety-treatment-otsego-mn.php' => 'anxiety-treatment-otsego-mn.html',
    'adolescent-mental-health-tms-st-michael-mn.php' => 'adolescent-mental-health-tms-st-michael-mn.html',
];

// Ensure dist folder exists
if (!is_dir('dist')) {
    mkdir('dist', 0755, true);
}

// Build each page
foreach ($pages as $srcFile => $outFile) {
    unset($hide_contact, $base_path, $page_schema, $extra_head);
    unset($page_title, $page_description, $hero_title, $hero_subtitle, $hero_badge, $hero_cta1_text, $hero_cta1_link, $hero_cta2_text, $hero_cta2_link);
    $hide_contact = false;
    $base_path = (strpos($outFile, '/') !== false) ? '../' : '';

    if (!file_exists($srcFile)) {
        echo "Warning: $srcFile not found, skipping.\n";
        continue;
    }

    $destPath = 'dist/' . $outFile;
    $destDir = dirname($destPath);

    // Ensure destination subdirectory exists
    if (!is_dir($destDir)) {
        mkdir($destDir, 0755, true);
    }

    // Clean any previous build
    if (file_exists($destPath)) {
        unlink($destPath);
    }

    // Capture output from PHP file
    ob_start();
    include $srcFile;
    $html = ob_get_clean();

    // Convert PHP links to HTML for static site
    $html = str_replace('.php"', '.html"', $html);
    $html = str_replace(".php'", ".html'", $html);
    $html = str_replace('.php#', '.html#', $html);
    $html = str_replace('.php/', '.html/', $html);

    // Save to dist folder
    file_put_contents($destPath, $html);
    echo "Built: $outFile\n";
}

// Copy assets to dist
function copyDir($src, $dst) {
    if (!is_dir($src)) return;
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    $files = scandir($src);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $srcPath = "$src/$file";
        $dstPath = "$dst/$file";
        if (is_dir($srcPath)) {
            copyDir($srcPath, $dstPath);
        } else {
            copy($srcPath, $dstPath);
        }
    }
}

// Copy assets to root and dist
copyDir('assets', 'dist/assets');
copyDir('landing/assets', 'dist/landing/assets');

// Copy specific root files (CSS, JS, etc.) to dist
$rootFiles = ['style.css', 'script.js', 'hero-bg.js', 'hero.html', 'favicon.ico'];
foreach ($rootFiles as $rFile) {
    if (file_exists($rFile)) {
        copy($rFile, 'dist/' . $rFile);
        echo "Copied: $rFile to dist/\n";
    }
}

// Copy SEO files (sitemap.xml, robots.txt) to dist if they exist in root
$seoFiles = ['sitemap.xml', 'robots.txt'];
foreach ($seoFiles as $seoFile) {
    if (file_exists($seoFile)) {
        copy($seoFile, 'dist/' . $seoFile);
        echo "Copied: $seoFile to dist/\n";
    }
}

// Copy blog .htaccess to dist
if (file_exists('blog/.htaccess')) {
    if (!is_dir('dist/blog')) mkdir('dist/blog', 0755, true);
    copy('blog/.htaccess', 'dist/blog/.htaccess');
    echo "Copied: blog/.htaccess to dist/blog/\n";
}

echo "\nBuild complete: All pages generated successfully!\n";
