var page_1 = document.getElementById("page-1");
var page_2 = document.getElementById("page-2");
var page_3 = document.getElementById("page-3");
var page_4 = document.getElementById("page-4");

const nik = document.getElementsByName("nik");
const nama = document.getElementsByName("nama");
const status = document.getElementsByName("status");
const alamat = document.getElementsByName("alamat");
const no_hp = document.getElementsByName("no_hp");
const p_terakhir = document.getElementsByName("p_terakhir");
const jam_masuk = document.getElementsByName("jam_masuk");
const jam_pulang = document.getElementsByName("jam_pulang");
const pw = document.getElementsByName("pw");

function toPage_1() {
	page_1.classList.remove("d-none");
	page_2.classList.add("d-none");
	page_3.classList.add("d-none");
	page_4.classList.add("d-none");
}
function toPage_2() {
	page_1.classList.add("d-none");
	page_2.classList.remove("d-none");
	page_3.classList.add("d-none");
	page_4.classList.add("d-none");
}
function toPage_3() {
	page_1.classList.add("d-none");
	page_2.classList.add("d-none");
	page_3.classList.remove("d-none");
	page_4.classList.add("d-none");
}
function toPage_4() {
	page_1.classList.add("d-none");
	page_2.classList.add("d-none");
	page_3.classList.add("d-none");
	page_4.classList.remove("d-none");
}
