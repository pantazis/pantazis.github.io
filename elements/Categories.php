
<style>
       .arrow-down::after {
           content: " ↓";
       }
   </style>
<?php

    $jsonData = '[
      {
        "subCategory": true,
        "category": "Infrastructure as a Service (IaaS)"
      },
      {
        "subCategory": false,
        "category": "Container as a Service (CaaS)"
      },
      {
        "subCategory": true,
        "category": "Platform as a Service (PaaS)"
      },
      {
        "subCategory": false,
        "category": "Software as a Service (SaaS)"
      },
      {
        "subCategory": false,
        "category": "Artificial Intelligence and Machine Learning"
      },
      {
        "subCategory": true,
        "category": "Data as a Service (DaaS)"
      },
      {
        "subCategory": false,
        "category": "Cybersecurity and Data Privacy"
      },
      {
        "subCategory": false,
        "category": "Internet of Things (IoT)"
      },
      {
        "subCategory": false,
        "category": "Automotive"
      },
      {
        "subCategory": false,
        "category": "Agriculture, Forestry, Fishing"
      },
      {
        "subCategory": false,
        "category": "Blockchain (DLT)"
      },
      {
        "subCategory": false,
        "category": "Beauty and Perfume"
      },
      {
        "subCategory": false,
        "category": "Cleaning and Facility Management Services"
      },
      {
        "subCategory": true,
        "category": "Community Groups, Social, Political and Religious"
      },
      {
        "subCategory": false,
        "category": "Education"
      },
      {
        "subCategory": false,
        "category": "Construction"
      },
      {
        "subCategory": false,
        "category": "Employment, Recruitment, HR"
      },
      {
        "subCategory": true,
        "category": "Energy and Utility Suppliers"
      },
      {
        "subCategory": false,
        "category": "Financial Services and Insurance"
      },
      {
        "subCategory": false,
        "category": "Healthcare"
      },
      {
        "subCategory": false,
        "category": "IT"
      },
      {
        "subCategory": false,
        "category": "Leisure and Entertainment"
      },
      {
        "subCategory": false,
        "category": "Legal, Public Order, Security"
      },
      {
        "subCategory": true,
        "category": "Manufacturing"
      },
      {
        "subCategory": false,
        "category": "Mining and Drilling"
      },
      {
        "subCategory": false,
        "category": "Project Management, Marketing and Admin"
      },
      {
        "subCategory": false,
        "category": "Personal Services"
      },
      {
        "subCategory": false,
        "category": "Restaurants, Bars, Cafes, Catering"
      },
      {
        "subCategory": false,
        "category": "Real Estate"
      },
      {
        "subCategory": false,
        "category": "Publishing, Printing and Photography"
      },
      {
        "subCategory": false,
        "category": "Tourism and Accommodation"
      },
      {
        "subCategory": false,
        "category": "Science and Engineering"
      },
      {
        "subCategory": false,
        "category": "Trade"
      },
      {
        "subCategory": true,
        "category": "Transportation and Transportation infrastructure"
      },
      {
        "subCategory": false,
        "category": "Implementation Services"
      },
      {
        "subCategory": false,
        "category": "Consulting"
      },
      {
        "subCategory": true,
        "category": "Service Management"
      }
    ]';

    // Convert JSON data to PHP array
    $arrayData = json_decode($jsonData, true);

    ?>



<div class="filters">
<?php foreach ($arrayData as $item) { ?>
  <div class="parent<?php  if ($item['subCategory']) echo " sub"; ?>">
  <?php  if ($item['subCategory']) { ?>
    <div class="text"><?=htmlspecialchars($item['category'])?></div> <i class="fa-regular fa-circle"></i> <i class="fas fa-chevron-down hide"></i> 
  <?php    } else { ?>
    <div class="text"><?=htmlspecialchars($item['category'])?> </div> <i class="fa-regular fa-circle"></i> <i class="fas fa-chevron-down"></i> 
  <?php   } ?>
  </div>
 <?php  } ?>
 </div>


