dayjs.extend(dayjs_plugin_duration);

function activateCountdown(element, dateString){
    const targetDate = dayjs(dateString).hour(0);

    console.log(targetDate);

    setInterval(() => {
        const now = dayjs();
        const duration = dayjs.duration(targetDate.diff(now));

        element.querySelector(".until__numeric--seconds").textContent = duration.seconds().toString().padStart(2, "0");
        element.querySelector(".until__numeric--minutes").textContent = duration.minutes().toString().padStart(2, "0");
        element.querySelector(".until__numeric--hours").textContent = duration.hours().toString().padStart(2, "0");
        element.querySelector(".until__numeric--days").textContent = duration.asDays().toFixed(0).toString().padStart(2, "0");
    },250)

    
    
}

activateCountdown(document.getElementById("myCountdown"), "2024-03-04")