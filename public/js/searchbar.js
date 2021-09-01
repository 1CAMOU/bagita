function searchBarTyping() {
    const searchBar = document.querySelector("#searchbar input")
    const searchBarIcon = document.querySelector("#searchbar svg")

    if (searchBar.value.length > 0) {
        searchBarIcon.classList.remove("translate-x-12")
        searchBarIcon.classList.add("translate-x-6")
    } else {
        searchBarIcon.classList.remove("translate-x-6")
        searchBarIcon.classList.add("translate-x-12")
    }
}