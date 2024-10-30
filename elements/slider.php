<?php

$data = [
    [
        "title" => "Elliot Cloud",
        "subtitle" => "Next level IoT and Digital Twins"
    ],
    [
        "title" => "Golem",
        "subtitle" => "AI-driven Digital Twins of urban systems as cloud services for city administrations to monitor performance and audit the compliance"
    ],
    [
        "title" => "digitanimal",
        "subtitle" => "Our livestock farming digital services offer real-time market price data, comprehensive animal metrics, and insights from IoT devices."
    ],
    [
        "title" => "Engineering D.HUB S.p.A",
        "subtitle" => "Enterprise private and certified cloud services"
    ],
  /*  [
        "title" => "European Dynamics S.A.",
        "subtitle" => "Cloud services for manufacturing SMEs and production automation providers."
    ],
    [
        "title" => "IDOM",
        "subtitle" => "Welcome to IDOM's Smart Ports Services Catalog, driving digital transformation in maritime logistics through advanced data management and technology integration."
    ],
    [
        "title" => "E-Group",
        "subtitle" => "Services for sovereign AI development."
    ],
    [
        "title" => "CSI Piemonte",
        "subtitle" => "CSI Piemonte or simply CSI means “Consorzio per il Sistema Informativo del Piemonte” is a public ICT company since 1977. CSI is also a Cloud Service Provider and its cloud is called Nivola, made by the Public Administration for the Public Administration. Nivola is qualified in the Italian Strategic Hub (ACN) to manage critical data of public agencies and entities by design."
    ]*/
];



?>
  <div class="titlebox">
    <div class="row">
        <div class="container">
            <h2>All catalogues</h2>
            <p class="subtitle">Choose between our Catalogues</p>
        </div>
    </div>
  </div>

<div class="slider">
    <div class="row">
        <div class="container nopad-bottom">
            <div class="slider_in">
            <?php foreach ($data as $index => $item) { ?>
                <div class="slider_item">
                    <div class="card <?php echo $index === 0 ? 'active' : ''; ?>">
                        <h2><?php echo htmlspecialchars($item['title']); ?></h2>
                        <div class="lineb"><?php echo htmlspecialchars($item['subtitle']); ?></div>
                        <div class="last"><span>No categories included</span></div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="controles">
<div class="row">
    <div class="container ">
        <div class="controles_in">
            <div class="prev nn"><i class="fas fa-chevron-left"></i><div class="pp">prev</div></div>
            <div class="dots">
                <?php foreach ($data as $index => $item) { ?>
                    <span class="dot <?php echo $index === 0 ? 'active' : ''; ?>"></span>
                <?php } ?>
            </div>
            <div class="next nn"><div class="pp">next</div><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>
</div>

</div>


