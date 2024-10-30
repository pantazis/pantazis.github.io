<?php
$jsonData = '[
  {
    "markdown": "Zoom-in your awareness\\n\\nZoom-out your perspective\\n\\n",
    "image": "https://dome-marketplace-prd.org/charging/media/assets/VAT-B71404750/ElliotGIS_smartcities.webp",
    "badges": [
      " Water Supply ",
      " Tourism and Accommodation ",
      " Energy and Utility Suppliers ",
      " Electricity ",
      " Gas "
    ],
    "title": "Elliot GIS"
  },
  {
    "markdown": "Don\'t miss a drop from your water network\\n\\nElliot>>Data>>Analysis>>Performance\\n\\n",
    "image": "https://dome-marketplace-prd.org/charging/media/assets/VAT-B71404750/ElliotWater_water.webp",
    "badges": [
      " Water Supply ",
      " Waste Collection, Treatment and Disposal Activities ",
      " Internet of Things (IoT) "
    ],
    "title": "Elliot Water"
  },
  {
    "markdown": "Zoom-in your awareness\\n\\nZoom-out your perspective\\n\\n",
    "image": "https://dome-marketplace-prd.org/charging/media/assets/VAT-B71404750/ElliotGIS_smartcities.webp",
    "badges": [
      " Water Supply ",
      " Tourism and Accommodation ",
      " Energy and Utility Suppliers ",
      " Electricity ",
      " Gas "
    ],
    "title": "Elliot GIS"
  },
  {
    "markdown": "Don\'t miss a drop from your water network\\n\\nElliot>>Data>>Analysis>>Performance\\n\\n",
    "image": "https://dome-marketplace-prd.org/charging/media/assets/VAT-B71404750/ElliotWater_water.webp",
    "badges": [
      " Water Supply ",
      " Waste Collection, Treatment and Disposal Activities ",
      " Internet of Things (IoT) "
    ],
    "title": "Elliot Water"
  },
  {
    "markdown": "Drain the Big Data into your results\\n\\nElliot>>Data>>Knowledge>>Best decisions\\n\\n",
    "image": "https://dome-marketplace-prd.org/charging/media/assets/VAT-B71404750/Productspecification_Energy-buildings.png.webp",
    "badges": [
      " Internet of Things (IoT) ",
      " Energy and Utility Suppliers ",
      " Data as a Service (DaaS) "
    ],
    "title": "Elliot Energy"
  },
  {
    "markdown": "Fly your city assets on autopilot\\n\\nElliot>>Data>>Planning>>Efficiency\\n\\n",
    "image": "https://dome-marketplace-prd.org/charging/media/assets/VAT-B71404750/ElliotSmartCity_smartcities.webp",
    "badges": [
      " Water Supply ",
      " Waste Collection, Treatment and Disposal Activities ",
      " Transport of Persons ",
      " Service Management ",
      " Internet of Things (IoT) ",
      " Energy and Utility Suppliers ",
      " Transportation and Transportation infrastructure ",
      " Operations ",
      " Governance ",
      " Electricity ",
      " Maintenance "
    ],
    "title": "Elliot Smart City"
  }
]';
$data = json_decode($jsonData, true);
foreach ($data as &$item) {
  usort($item['badges'], function($a, $b) {
      return strlen($a) - strlen($b);
  });
}





?>
<div>
<div class="offer-list">
<?php foreach ($data as $item) { ?>
    <div class="card-offer card">
        <h2><?php echo htmlspecialchars($item['title']); ?></h2>
        <div class="img_parent">
        <div class="imgOffer" style="background-image: url('<?php echo htmlspecialchars($item['image']); ?>');" alt="<?php echo htmlspecialchars($item['title']); ?>"></div>
        </div>
        <p class="markdown"><?php echo nl2br(htmlspecialchars($item['markdown'])); ?></p>
        
        <div class="badges">
            <?php foreach ($item['badges'] as $badge) { ?>
              <div class="fl">
                <div class="badge"> <i class="fas fa-cloud" style="color:rgb(0, 173, 211)"></i><?php echo htmlspecialchars($badge); ?></div>
              </div>
            <?php } ?>
            <div class="fl">
                <div class="badge border" style="background:#FBD5D5;color:#C81E1E;border: 1px solid;"> <i class="fas fa-cloud" style="color:#C81E1E"></i> Level 1  </div>
              </div>
        </div>
        <div class="fl" style="margin-top: auto;">
        <div class="btn"><i class="fas fa-eye"></i> View details </div>
        </div>
    </div>
<?php } ?>
</div>
</div>
