<?php 
// assosiative array
$menues = [
    [
        'image_url' => './images/sandwich.jpg',
        'title' => 'The Perfect Sandwich, A Real NYC Classic',
        'details' => 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
    [
        'image_url' => './images/steak.jpg',
        'title' => 'Let Me Tell You About This Steak',
        'details' => 'Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
    [
        'image_url' => './images/cherries.jpg',
        'title' => 'Cherries, interrupted',
        'details' => 'Lorem ipsum text praesent tincidunt ipsum lipsum.<br>What else?',
    ],
    [
        'image_url' => './images/popsicle.jpg',
        'title' => 'All I Need Is a Popsicle',
        'details' => 'Lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
    [
        'image_url' => './images/salmon.jpg',
        'title' => 'Salmon For Your Skin',
        'details' => 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
    [
        'image_url' => './images/sandwich.jpg',
        'title' => 'The Perfect Sandwich',
        'details' => 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
    [
        'image_url' => './images/croissant.jpg',
        'title' => 'Le French',
        'details' => 'Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
    [
        'image_url' => './images/wine.jpg',
        'title' => 'Once Again, Robust Wine and Vegetable Pasta',
        'details' => 'Lorem ipsum text praesent tincidunt ipsum lipsum.',
    ],
];

// regular array
$tags = [
    'Travel',
    'New York',
    'Dinner',
    'Slmon',
    'France',
    'Drinks',
    'Ideas',
    'Flavors',
    'Cuisine',
    'Chicken',
    'Dressing',
    'Fried',
    'Fish',
    'Duck',
];

$blogs = [
    [
        'thumb_url' => './images/workshop.jpg',
        'title' => 'Lorem',
        'details' => 'Sed mattis nunc. Lorem ipsum dolor sit amet.',
    ],
    [
        'thumb_url' => './images/workshop.jpg',
        'title' => 'Ipsum',
        'details' => 'Praes tinci sed. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, rem?',
    ],
    [
        'thumb_url' => './images/workshop.jpg',
        'title' => 'Lorem',
        'details' => 'Sed mattis nunc. Lorem ipsum dolor sit amet.',
    ],
];

function getBlogs(){
    // if you want to use variables from outside a function then have to use global keyword before that variable
    global $blogs;
    return $blogs;
}
?>