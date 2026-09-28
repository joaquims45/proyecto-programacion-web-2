<link rel="stylesheet" href="/parcial1/components/imgCard/styles.css">

<?php if (!empty($curiosidad['h2'])) { ?>
<h2><?php echo $curiosidad['h2']; ?></h2>
<?php } ?>

<article>
<?php if (isset($curiosidad['p'])) { ?>
        <p><?php echo $curiosidad['p']; ?></p>
<?php } elseif (isset($curiosidad['items'])) { ?>
        <ul>
        <?php foreach ($curiosidad['items'] as $item) { ?>
            <li><?php echo $item; ?></li>
        <?php } ?>
        </ul>
<?php } ?>
        <img src="<?php echo $curiosidad['img']; ?>" width="100%" alt="<?php echo $curiosidad['alt']; ?>">
    </article>
