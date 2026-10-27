<?php
require_once __DIR__ . '/../components/bootstrap.php';

$pageTitle = 'Directory';
$pageCSS = 'directory.css';
$pageDescription = 'Find participating organisations and professional contacts in the Scar Confidence directory.';
$current_page = 'directory';
$searchValue = $_GET['q'] ?? '';
$search = is_string($searchValue) ? trim($searchValue) : '';
$search = substr($search, 0, 100);
$companies = [];
$directoryAvailable = true;
$connection = database();

if ($connection) {
    $sql = 'SELECT company_name, address, primary_name, primary_email, primary_phone,
                   secondary_name, secondary_email, secondary_phone
            FROM companies
            WHERE company_name LIKE ? OR address LIKE ?
            ORDER BY company_name LIMIT 100';
    $statement = mysqli_prepare($connection, $sql);
    if ($statement) {
        $term = '%' . $search . '%';
        mysqli_stmt_bind_param($statement, 'ss', $term, $term);
        if (mysqli_stmt_execute($statement)) {
            $result = mysqli_stmt_get_result($statement);
            while ($row = mysqli_fetch_assoc($result)) {
                $companies[] = $row;
            }
        } else {
            $directoryAvailable = false;
            error_log('Directory query failed: ' . mysqli_stmt_error($statement));
        }
        mysqli_stmt_close($statement);
    } else {
        $directoryAvailable = false;
        error_log('Directory preparation failed: ' . mysqli_error($connection));
    }
    mysqli_close($connection);
} else {
    $directoryAvailable = false;
}

require_once __DIR__ . '/../components/header.php';
?>
<main id="main-content" class="directory-page">
    <header class="directory-intro">
        <p class="eyebrow">Professional connections</p>
        <h1>Organisation directory</h1>
        <p>Find participating organisations and their professional contact points.</p>
    </header>
    <form class="directory-search" method="get" action="<?= escape(url('pages/directory.php')) ?>">
        <label for="directory-search">Search by organisation or address</label>
        <div>
            <input id="directory-search" type="search" name="q" value="<?= escape($search) ?>" maxlength="100" placeholder="Organisation name or address">
            <button type="submit">Search</button>
            <?php if ($search !== ''): ?><a href="<?= escape(url('pages/directory.php')) ?>">Clear</a><?php endif; ?>
        </div>
    </form>
    <p class="directory-count" role="status">
        <?php if (!$directoryAvailable): ?>
            The directory is temporarily unavailable. Please try again later.
        <?php elseif (count($companies) === 0): ?>
            <?= $search === '' ? 'No organisations have been listed yet. Please check back soon.' : 'No organisations matched your search.' ?>
        <?php else: ?>
            <?= count($companies) ?> organisation<?= count($companies) === 1 ? '' : 's' ?> found.
        <?php endif; ?>
    </p>
    <div class="directory-grid">
        <?php foreach ($companies as $company): ?>
            <article class="directory-card">
                <h2><?= escape($company['company_name']) ?></h2>
                <p><?= nl2br(escape($company['address'])) ?></p>
                <?php foreach (['primary' => 'Primary contact', 'secondary' => 'Secondary contact'] as $key => $heading): ?>
                    <?php if ($company[$key . '_name'] || $company[$key . '_email'] || $company[$key . '_phone']): ?>
                        <section>
                            <h3><?= $heading ?></h3>
                            <?php if ($company[$key . '_name']): ?><p><?= escape($company[$key . '_name']) ?></p><?php endif; ?>
                            <?php if ($company[$key . '_email']): ?><p><a href="mailto:<?= escape($company[$key . '_email']) ?>"><?= escape($company[$key . '_email']) ?></a></p><?php endif; ?>
                            <?php if ($company[$key . '_phone']): ?><p><a href="tel:<?= escape(preg_replace('/[^+0-9]/', '', $company[$key . '_phone'])) ?>"><?= escape($company[$key . '_phone']) ?></a></p><?php endif; ?>
                        </section>
                    <?php endif; ?>
                <?php endforeach; ?>
            </article>
        <?php endforeach; ?>
    </div>
</main>
<?php require_once __DIR__ . '/../components/footer.php'; ?>
