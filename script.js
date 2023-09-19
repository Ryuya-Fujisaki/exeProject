/*
  This is your site JavaScript code - you can add interactivity!
*/

// Print a message in the browser's dev tools console each time the page loads
// Use your menus or right-click / control-click and choose "Inspect" > "Console"
console.log("Hello 🌎");

/* 
Make the "Click me!" button move when the visitor clicks it:
- First add the button to the page by following the steps in the TODO 🚧
*/
const btn = document.querySelector("button"); // Get the button from the page
if (btn) {
  // Detect clicks on the button
  btn.onclick = function () {
    // The 'dipped' class in style.css changes the appearance on click
    btn.classList.toggle("dipped");
  };
}

// ----- GLITCH STARTER PROJECT HELPER CODE -----

// Open file when the link in the preview is clicked
let goto = (file, line) => {
  window.parent.postMessage(
    { type: "glitch/go-to-line", payload: { filePath: file, line: line } },
    "*"
  );
};
// Get the file opening button from its class name
const filer = document.querySelectorAll(".fileopener");
filer.forEach((f) => {
  f.onclick = () => {
    goto(f.dataset.file, f.dataset.line);
  };
});

// app.js

// // ナビゲーションの要素を取得
// const navLinks = document.querySelectorAll("a");
// console.log("navLinks");
// console.log(navLinks);
// // ページ遷移を管理する関数
// function navigateToPage(event) {
//   event.preventDefault(); // リンクのデフォルトの動作を無効にする
//   // クリックされたリンクのhref属性を取得
//   const pageName = event.target.getAttribute('href').replace('.html', '');
//   console.log('pageName')
//   console.log(pageName)
//   const pageName = event.target.getAttribute("href"); 
//   console.log('pageName')
//   console.log(pageName)
//   showPage(pageName); // 対応するページを表示
// }

// // ページを表示する関数
// function showPage(pageName) {
//   console.log("showPage");
//   console.log(pageName);

//   const pages = document.querySelectorAll("body > *"); // すべての直下の要素を取得
//   console.log("pages");
//   console.log(pages);

//   pages.forEach((page) => {
//     // page.style.display = "none"; // すべてのページを非表示にする
//   });

//   const pageToDisplay = document.querySelector(pageName); // 指定されたページを取得
//   console.log('pageToDisplay')
//   console.log(pageToDisplay)
//   if (pageToDisplay) {
//     pageToDisplay.style.display = "block"; // 指定されたページを表示
//   }
// }

// // ナビゲーションリンクにクリックイベントリスナーを追加
// navLinks.forEach((link) => {
//   link.addEventListener("click", navigateToPage);
// });

// // 初期ページを表示
// showPage("index");