document.getElementById('search').addEventListener('submit', function(event){
    event.preventDefault();
    document.getElementById('search').classList.remove('search-not-active');
    setTimeout(() => {
        document.getElementById('search').submit()
    }, 400);
})


