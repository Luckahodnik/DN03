let vsota = 0;
let arrayPodatkov = [];
console.log(arrayPodatkov);
var chart = null;
$(document).ready(function(){
	fileSelector();
	updateOnKeypress();

	$('.modal').modal();
	$('.modal-trigger').modal({
		dismissible: false
		});

	$('.datepicker').datepicker();
	$("#datum").datepicker({format: "yyyy-mm-dd"});
	$('select').formSelect();
	var elems = document.querySelectorAll('.fixed-action-btn');
	var instances = M.FloatingActionButton.init(elems, {
			direction: 'left',
			hoverEnabled: false
	});
  chart = new Chart(document.getElementById("myChart"), {
    type: 'line',
    data: {
        labels: ['Januar', 'Februar', 'Marec', 'April', 'Maj', 'Junij', 'Julij', 'Avgust', 'September','Oktober','November','December' ],
        datasets: [{
            label: 'Pregled izdatkov enega tedna €',
            data: dictMesecev,
            backgroundColor:	'rgba(0, 102, 0, 0.2)',
            borderColor: 'rgba(0, 102, 0, 0.2)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });
})



function processXML(xmlDoc){
    let retObj = {};
				let ss = xmlDoc.getElementsByTagName("payment_data");
				let vr = xmlDoc.getElementsByTagName("doc_data");
				let nm = xmlDoc.getElementsByTagName("sender");
				if(nm.length > 0){
					let nr = nm[0].getElementsByTagName("name");
					if(nr.length > 0){
									retObj["name"] = nr[0].textContent ;
					}
				}
    if(ss.length > 0){
								let zr = ss[0].getElementsByTagName("amount");
        if(zr.length > 0){
												retObj["znesek"] = parseFloat(zr[0].textContent);
        }
    }
    if(vr.length > 0){
										let dr = vr[0].getElementsByTagName("timestamp");
										if(dr.length > 0){
														retObj["datum"] = new Date(dr[0].textContent);
										}
				}

    return retObj;
}

function deleteFromTable(e){
    arrayPodatkov = [];
    for(let x in dictMesecev){
        dictMesecev[x]= 0;
    }
				renderTable();
				chart.update();chart.update();
}

function renderTable(){
				const tabelaEl = document.getElementById('tabela');
    const tbodyEl = tabelaEl.getElementsByTagName('tbody')[0];
    tbodyEl.innerHTML = "";

    vsota = 0;
    arrayPodatkov.forEach(function(obj, idx){
        let trEl = document.createElement("tr");
        let tdZnesekEl = document.createElement("td");
								let tdDatumEl  = document.createElement("td");
								let tdNameEl  = document.createElement("td");
								tdNameEl.innerText = obj["name"];
        tdZnesekEl.innerText = obj["znesek"];
								tdDatumEl.innerText = obj["datum"].toLocaleDateString('en-GB');
								trEl.appendChild(tdNameEl);
        tbodyEl.appendChild(trEl);
        trEl.appendChild(tdZnesekEl);
        tabelaEl.appendChild(trEl);
        trEl.appendChild(tdDatumEl);
								tbodyEl.appendChild(trEl);
        vsota += obj["znesek"];
    });
    updateIzdatke();
}

function updateIzdatke(){
	const maksEl = document.getElementById("maks_sum");
				maksEl.innerHTML = maks.toFixed(2) + "€";
	const vpisiEl = document.getElementById("sum_znesek");
	vpisiEl.innerHTML = vsota.toFixed(2) + "€";
	const stEl = document.getElementById("st_rac");
	stEl.innerHTML = arrayPodatkov.length;
}

function updateTable(){
				const vpisiEl = document.getElementById("ime_trg");
				const spentEl = document.getElementById('znesek');
    const whenEl = document.getElementById('datum');

				let racIn = spentEl.value;
    let datIn = whenEl.value;
				let namIn = vpisiEl.value;
    if(!isNaN(racIn)){
            racIn = parseFloat(racIn);
												datIn = new Date(datIn);
            if(datIn.getYear() == 119){
            let retObj = {"znesek":racIn, "datum":datIn, "name":namIn};
												arrayPodatkov.push(retObj);
            aggregateByMonths();
            renderTable();
            }
								}
}


function updateOnKeypress(){
				const vpisiEl = document.getElementById("ime_trg");
				const spentEl = document.getElementById('znesek');
    const whenEl  = document.getElementById('datum');
    const submitEl = document.getElementById('dodaj');

    let funcOnKeypress = function(e) {
        e.stopPropagation();
        let key = e.which || e.keyCode;
        if (key == 13) {
            updateTable();
        }
    }

    submitEl.onclick = updateTable;
    spentEl.addEventListener('keypress', funcOnKeypress);
    whenEl.addEventListener('keypress', funcOnKeypress);
    document.getElementById("delete").onclick = deleteFromTable;
}


function fileSelector(){
	const fileInputEl = document.getElementById('file_input');

	function handleFileSelect(evt) {
					evt.stopPropagation();
					evt.preventDefault();

					let files = [];

					// file select input functionality
					if (files.length <= 0){
									files = this.files;
					}

					let output = [];
					for (let i = 0, file; file = files[i]; i++) {
									if(files[i].type == "text/xml"){
												chart.update();
													let reader = new FileReader();
													let parser = new DOMParser();

													reader.addEventListener('load', function(e) {
																	let xmlDoc = parser.parseFromString(e.target.result, "text/xml");
																	let returnedObject = processXML(xmlDoc);
																	arrayPodatkov.push(returnedObject);

																	aggregateByMonths();
																	renderTable();
																	//renderCanvas();
													});
													reader.readAsText(file);
													output.push(file);
									}
					}
	}
	fileInputEl.addEventListener('change', handleFileSelect, false);
}

let maks = 0;
let dict = {};
let dictMesecev = new Array(12).fill(0);
function aggregateByMonths(){
    let month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    let sum = 0;
    for(m in month){
        dict[month[m]] = [];
    }
    for(let x in arrayPodatkov){
        dict[month[arrayPodatkov[x].datum.getMonth()]].push(arrayPodatkov[x].znesek);
        sum = dict[month[arrayPodatkov[x].datum.getMonth()]].reduce((previous, current) => current += previous);
        dictMesecev[arrayPodatkov[x].datum.getMonth()] = sum;
    }
				for(x in dictMesecev){
					if(dictMesecev[x] >= maks){
									maks = dictMesecev[x];

					}
				}
				console.log( dictMesecev);
				chart.update();
				updateIzdatke();
			}

