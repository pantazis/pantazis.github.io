document.addEventListener('DOMContentLoaded', function() {
    const resultArray = [];
    const cards = document.querySelectorAll("bae-off-card");

    cards.forEach(card => {
        const markdown = card.querySelector('markdown').innerText;
        const imgUrl = card.querySelector('img').src;
        const h5Text = card.querySelector('h5').innerText;
        const badges = [];

        card.querySelectorAll('bae-badge').forEach(badge => {
            badges.push(badge.innerText);
        });

        const obj = {
            markdown: markdown,
            image: imgUrl,
            badges: badges,
            title: h5Text
        };

        resultArray.push(obj);
    });

    console.log(JSON.stringify(resultArray, null, 2));

    
});