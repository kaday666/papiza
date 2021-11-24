AOS.init();

window.addEventListener("scroll", () => {
    let content = document.querySelector(".covid");
    let contentpt = content.getBoundingClientRect().top;
    let screenpt = window.innerHeight;
    if (contentpt < screenpt) {
        covidInfo();
    }
});

async function covidInfo() {
    //fetching the data about myanmar
    const response = await fetch("https://api.covid19api.com/summary");
    const data = await response.json();
    const global = data.Global;
    const allCountries = data.Countries;
    const myanmar = allCountries.find((c) => c.Country === "Myanmar");

    //display
    const deathDisplay = document.querySelector("#totalDeath");
    const confirmDisplay = document.querySelector("#totalConfirm");
    const totalCofirmGlobalDisplay =
        document.querySelector("#totalCofirmGlobal");

    //setting data-target
    totalCofirmGlobalDisplay.dataset.target = global.NewConfirmed;
    deathDisplay.dataset.target = myanmar.TotalDeaths;
    confirmDisplay.dataset.target = myanmar.TotalConfirmed;

    const displays = document.querySelectorAll(".display");
    const speed = 2000;

    displays.forEach((display) => {
        const updateCount = () => {
            const target = +display.getAttribute("data-target");
            const count = +display.innerHTML;
            const inc = Math.round(target / speed);

            if (count < target) {   
                display.innerHTML = count + inc;
                setTimeout(updateCount, 1);
            } else {
                count.innerHTML = target;
            }
        };

        updateCount();
    });

    //displaying the counter

    //getting the date
    var stringDate = global.Date;
    var date = new Date(stringDate);

    //displaying the date
    const dateDisplay = document.querySelector("#dateDisplay");
    dateDisplay.innerHTML =
        date.getDate().toString() +
        " / " +
        date.getMonth().toString() +
        " / " +
        date.getFullYear().toString();
}
