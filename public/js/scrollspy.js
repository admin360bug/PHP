document.addEventListener("scroll", function() {
    var height = window.innerHeight;
    var targets = document.querySelectorAll("[data-target]");
    for(var i = 0, length = targets.length; i < length; i++) {
        var target = targets[i];
        var position = target.getBoundingClientRect()
        if(position.top >= 0 && position.top <= 0.5 * height) {
            var indicators = document.querySelectorAll("nav ul li a");
            for(var j = 0, indicatorsLength = indicators.length; j < indicatorsLength; j++) {
                var indicator = indicators[j];
                if(indicator.getAttribute("href") == target.getAttribute("data-target")) {
                    indicator.className = "active";
                } else {
                    indicator.className = "";
                }
            }
        }
    }
});
