// MENU SCROLLING ASIDE ______________
function getScrollTop() {
  if (typeof window.pageYOffset !== "undefined") {
    // Most browsers
    return window.pageYOffset;
  }

  var d = document.documentElement;
  if (typeof d.clientHeight !== "undefined") {
    // IE in standards mode
    return d.scrollTop;
  }

  // IE in quirks mode
  return document.body.scrollTop;
}

window.onscroll = function () {
  var box = document.getElementById("menu");
  var scroll = getScrollTop();

  if (scroll > 28) {
    box.style.top = scroll + 310 + "px";
  }
};

// SETTING AND REMOVING MENU LIST CLASSES

let items = document.querySelectorAll(".menu-item");
for (let i = 0; i < items.length; i++) {
  items[i].onclick = function () {
    var c = 0;
    while (c < items.length) {
      items[c++].className = "menu-item";
    }
    items[i].className = "menu-item curr-post";
  };
}

// SMOOTH SCROLL _____________________ VIDEO
const video = document.getElementById("video");
const videoContainer = document.querySelector("#video-container");
video.addEventListener("click", () => {
  videoContainer.scrollIntoView(true);
});

// SMOOTH SCROLL _____________________ ACTIVITIES
const activities = document.getElementById("activities");
const activitiesContainer = document.querySelector("#activities-container");
activities.addEventListener("click", () => {
  activitiesContainer.scrollIntoView(true);
});

// SMOOTH SCROLL _____________________ NEWS
const news = document.getElementById("news");
const newsContainer = document.querySelector("#news-container");
news.addEventListener("click", () => {
  newsContainer.scrollIntoView(true);
});
