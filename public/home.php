<?php

require_once __DIR__ . '/../src/helpers.php';

ob_start();

$title = 'PC Parts Catalog';

?>

<div class="home">

    <h1>Каталог комплектующих для ПК</h1>
    
    <div class="ascii-wrapper">
        <pre class="ascii">                     .,,uod8B8bou,,.
            ..,uod8BBBBBBBBBBBBBBBBRPFT?l!i:.
        ,=m8BBBBBBBBBBBBBBBRPFT?!||||||||||||||
        !...:!TVBBBRPFT||||||||||!!^^""'   ||||
        !.......:!?|||||!!^^""'            ||||
        !.........||||                     ||||
        !.........||||  #>_                ||||
        !.........||||                     ||||
        !.........||||                     ||||
        !.........||||                     ||||
        !.........||||                     ||||
        `.........||||                    ,||||
         .;.......||||               _.-!!|||||
  .,uodWBBBBb.....||||       _.-!!|||||||||!:'
!YBBBBBBBBBBBBBBb..!|||:..-!!|||||||!iof68BBBBBb....
!..YBBBBBBBBBBBBBBb!!||||||||!iof68BBBBBBRPFT?!::   `.
!....YBBBBBBBBBBBBBBbaaitf68BBBBBBRPFT?!:::::::::     `.
!......YBBBBBBBBBBBBBBBBBBBRPFT?!::::::;:!^"`;:::       `.
!........YBBBBBBBBBBRPFT?!::::::::::^''...::::::;         iBBbo.
`..........YBRPFT?!::::::::::::::::::::::::;iof68bo.      WBBBBbo.
  `..........:::::::::::::::::::::::;iof688888888888b.     `YBBBP^'
    `........::::::::::::::::;iof688888888888888888888b.     `
      `......:::::::::;iof688888888888888888888888888888b.
        `....:::;iof688888888888888888888888888888888899fT!
          `..::!8888888888888888888888888888888899fT|!^"'
            `' !!988888888888888888888888899fT|!^"'
                `!!8888888888888888899fT|!^"'
                  `!988888888899fT|!^"'
                    `!9899fT|!^"'
                      `!^"'</pre>
    </div>

    <p>
        Просматривайте комплектущие для ПК, сравнивайте цены, исследуйте категории.
    </p>

    <div class="home-links">

        <a class="home-card" href="/parts">
            Все комплектущие
        </a>

        <a class="home-card" href="/categories">
            Категории
        </a>

        <a class="home-card" href="/manufacturers">
            Производители
        </a>

    </div>

</div>

<?php

$content = ob_get_clean();
require __DIR__ . '/../src/views/layout.php';
