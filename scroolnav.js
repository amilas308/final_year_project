window.onscroll = () => {
    scrollNavbar = () => {
        const navBar = document.getElementById(".navbar");
        const links = document.querySelectorAll("#header");
        if(document.documentElement.scrollTop > 0){
            navBar.classList.add("pa-fixed-header");
            for(let i =0; i < links.length; i++){
                const element = links[i];
                element.classList.add('text-black');
            }
        } else{
            navBar.classList.remove("pa-fixed-header");
            // change the color of the links to default
            for(let i = 0; i < links.length; i++){
                const element = links[i];
                element.classList.remove('text-black');
            }
        }
    }
}