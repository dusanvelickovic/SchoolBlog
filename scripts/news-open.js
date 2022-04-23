// SMOOTH SCROLL
const numOfComments = document.querySelector(".numOfComments");
const commentsScroll = document.getElementById("comments");

numOfComments.addEventListener("click", (e) => {
  e.preventDefault();
  commentsScroll.scrollIntoView(true);
});
// LIKES ICON ON CLICK
function cannotLike() {
  return confirm("Morate biti ulogovani da biste lajkovali.");
}
