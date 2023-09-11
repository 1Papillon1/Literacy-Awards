window.addEventListener("DOMContentLoaded", () => {
	document.getElementById("toggle").addEventListener("click", () => {
		const sidebarEl = document.getElementsByClassName("sidebar")[0];
		sidebarEl.classList.toggle("sidebar--isHidden");
	

		
	});
});

// Dark Light



function darkLigToggle() {
	var element = document.body;
	var header = document.getElementById("header");
	var footer = document.getElementById("footer");
	element.classList.toggle("dark-mode");
	header.classList.toggle("dark-mode__header");
	footer.classList.toggle("dark-mode__footer");



	let items = document.getElementsByClassName("text");
	for (let i = 0; i < items.length; i++) {
		items[i].classList.toggle("dark-mode__text");
	}

	let table = document.getElementsByClassName("table");
	for (let i = 0; i < table.length; i++) {
		table[i].classList.toggle("dark-mode__table");
	}

	let wrapper = document.getElementsByClassName("wrapperform");
	for (let i = 0; i < wrapper.length; i++) {
		wrapper[i].classList.toggle("dark-mode__wrapper");
	}

	let tableRows = document.getElementsByClassName("table-row");
	for (let i = 0; i < tableRows.length; i++) {
		tableRows[i].classList.toggle("dark-mode-table-rows");
	}

	
 }

// Font Size

function fontSizeDef() {
	let Items = document.getElementsByClassName("menu-default");
	for (let i = 0; i < Items.length; i++) {
		Items[i].style.fontSize = "18px";
}

	let Items2 = document.getElementsByClassName("text-default");
	for (let i = 0; i < Items2.length; i++) {
		Items2[i].style.fontSize = "16px";
}

let Items3 = document.getElementsByClassName("title-default");
	for (let i = 0; i < Items3.length; i++) {
		Items3[i].style.fontSize = "24px";
}

let Items4 = document.getElementsByClassName("list__item-default");
	for (let i = 0; i < Items4.length; i++) {
		Items4[i].style.fontSize = "18px";
}

let Items5 = document.getElementsByClassName("input-default");
	for (let i = 0; i < Items5.length; i++) {
		Items5[i].style.fontSize = "20px";
}

let Items6 = document.getElementsByClassName("title-default");
for (let i = 0; i < Items6.length; i++) {
	Items6[i].style.fontSize = "36px";
}

let Items7 = document.getElementsByClassName("subtitle-default");
for (let i = 0; i < Items7.length; i++) {
	Items7[i].style.fontSize = "28px";
}

}


function fontSizeLar() {
	let Items = document.getElementsByClassName("menu-default");
	for (let i = 0; i < Items.length; i++) {
		Items[i].style.fontSize = "22px";
}

let Items2 = document.getElementsByClassName("text-default");
	for (let i = 0; i < Items2.length; i++) {
		Items2[i].style.fontSize = "20px";
}

let Items3 = document.getElementsByClassName("title-default");
	for (let i = 0; i < Items3.length; i++) {
		Items3[i].style.fontSize = "28px";
}

let Items4 = document.getElementsByClassName("list__item-default");
	for (let i = 0; i < Items4.length; i++) {
		Items4[i].style.fontSize = "22px";
}

let Items5 = document.getElementsByClassName("input-default");
	for (let i = 0; i < Items5.length; i++) {
		Items5[i].style.fontSize = "24px";
}

let Items6 = document.getElementsByClassName("title-default");
for (let i = 0; i < Items6.length; i++) {
	Items6[i].style.fontSize = "40px";
}

let Items7 = document.getElementsByClassName("subtitle-default");
for (let i = 0; i < Items7.length; i++) {
	Items7[i].style.fontSize = "32px";
}

}


/* Font Weight */

function fontWeightNormal() {
	let Items = document.getElementsByClassName("menu-default");
	for (let i = 0; i < Items.length; i++) {
		Items[i].style.fontWeight = "normal";
}

let Items2 = document.getElementsByClassName("text-default");
	for (let i = 0; i < Items2.length; i++) {
		Items2[i].style.fontWeight = "normal";
}

let Items3 = document.getElementsByClassName("input-default");
	for (let i = 0; i < Items3.length; i++) {
		Items3[i].style.fontWeight = "normal";
}

}

function fontWeightBold() {
	let Items = document.getElementsByClassName("text-default");
	for (let i = 0; i < Items.length; i++) {
		Items[i].style.fontWeight = "bold";
}

let Items2 = document.getElementsByClassName("text-default");
	for (let i = 0; i < Items2.length; i++) {
		Items2[i].style.fontWeight = "bold";
}

let Items3 = document.getElementsByClassName("input-default");
	for (let i = 0; i < Items3.length; i++) {
		Items3[i].style.fontWeight = "bold";
}

}

/* Link decoration */

function linkDefault() {
	let links = document.getElementsByClassName("link");
	for (let i = 0; i < links.length; i++) {
		links[i].style.textDecoration = "none";
	}
}

function linkUnderline() {
	let links = document.getElementsByClassName("link");
	for (let i = 0; i < links.length; i++) {
		links[i].style.textDecoration = "underline";
	}
}