const randomizeFavorite = () =>{
    const fav = document.querySelectorAll(".foreach-favorite img");
    Array.from(fav).forEach(f => {
        setInterval(() => {
            f.src = "https://picsum.photos/200"
        }, 100);
    })
}

window.addEventListener('load', randomizeFavorite);
