<?php
function rewriteText($text) {
    $synonyms = array(
        'example' => array('sample', 'illustration', 'instance'),
        'good' => array('great', 'excellent', 'superb'),
        // Add more word replacements here
    );

    $words = explode(' ', $text);
    $rewrittenWords = array();

    foreach ($words as $word) {
        $lowercaseWord = strtolower($word);
        if (array_key_exists($lowercaseWord, $synonyms)) {
            $synonymList = $synonyms[$lowercaseWord];
            $rewrittenWords[] = $synonymList[array_rand($synonymList)];
        } else {
            $rewrittenWords[] = $word;
        }
    }

    return implode(' ', $rewrittenWords);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $originalText = $_POST['original_text'];
    $rewrittenText = rewriteText($originalText);
} else {
    $originalText = '';
    $rewrittenText = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Article Rewriter</title>
</head>
<body>
    <h1>Article Rewriter</h1>

    <form method="post" action="">
        <label for="original_text">Original Text:</label><br>
        <textarea name="original_text" rows="6" cols="50"><?php echo $originalText; ?></textarea><br>
        <input type="submit" value="Rewrite">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <h2>Rewritten Text</h2>
        <p><?php echo $rewrittenText; ?></p>
    <?php endif; ?>
</body>
</html>
