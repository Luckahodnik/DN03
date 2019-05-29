
$(document).ready(function(){
	$('.modal').modal();
	$('.modal-trigger').modal({
		dismissible: false
  });
	$('.datepicker').datepicker();
	$('select').formSelect();
	var elems = document.querySelectorAll('.fixed-action-btn');
	var instances = M.FloatingActionButton.init(elems, {
			direction: 'left',
			hoverEnabled: false
	});
  new Chart(document.getElementById("myChart"), {
    type: 'line',
    data: {
        labels: ['Ponedeljek', 'Torek', 'Sreda', 'Četrtek', 'Petek', 'Sobota', 'Nedelja' ],
        datasets: [{
            label: 'Pregled izdatkov enega tedna €',
            data: [120, 19, 30, 5, 2, 3, 160,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
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
/*  new Chart(document.getElementById("myChart1"), {
    type: "pie",

    data: {
      labels: ["Food", "Clothes", "Necessities", "Work supplies", "Other"],
      datasets: [{
        backgroundColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
      ],
        data: [478,267,34,84,33]
      }]
    },
    options: {
      legend: {
          display: false
      },
      title: {
        display: true,
        text: 'Izdatki glede na vrste produktov'
      },
      animation: {
          animateScale: true,
          animateRotate: true
      }

  }
  });
*/

})

let vsota = 0;
let arrayPodatkov = [];

function processXML(xmlDoc){
    let retObj = {};
    let ss = xmlDoc.getElementsByTagName("StevilkaSklica");
    let vr = xmlDoc.getElementsByTagName("VrstaDatuma");
    if(ss.length > 0){
        let zr = ss[0].parentElement.parentElement.getElementsByTagName("ZnesekRacuna");
        if(zr.length > 0){
            retObj["znesek"] = parseFloat(zr[0].textContent);
        }
    }
    if(vr.length > 0){
        for(let x in vr){
            if(vr[x].innerHTML == "137"){
                let dr = vr[x].parentElement.getElementsByTagName("DatumRacuna");
                if(dr.length > 0){
                    retObj["datum"] = new Date(dr[0].textContent);
                }
            }
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
    renderCanvas();
}

function renderTable(){
    const tabelaEl = document.getElementById('tab_izd');
    const tbodyEl = tabelaEl.getElementsByTagName('tbody')[0];
    tbodyEl.innerHTML = "";

    vsota = 0;
    arrayPodatkov.forEach(function(obj, idx){
        let trEl = document.createElement("tr");
        let tdZnesekEl = document.createElement("td");
        let tdDatumEl  = document.createElement("td");
        tdZnesekEl.innerText = obj["znesek"];
        tdDatumEl.innerText = obj["datum"].toLocaleDateString('en-GB');
        trEl.appendChild(tdZnesekEl);
        tabelaEl.appendChild(trEl);
        trEl.appendChild(tdDatumEl);
        tbodyEl.appendChild(trEl);
        vsota += obj["znesek"];
    });
    updateIzdatke();
}

function updateIzdatke(){
    const vpisiEl = document.getElementById("vpisi");
    vpisiEl.innerHTML = "Tvoji izdatki letni so: " + vsota.toFixed(2) + "€";
}

function updateTable(){
    const spentEl = document.getElementById('spent');
    const whenEl = document.getElementById('when');
    const vpisiEl = document.getElementById("vpisi");

    let racIn = spentEl.value;
    let datIn = whenEl.value;

    if(!isNaN(racIn)){
        if(datIn == "" || racIn == "" ){
            vpisiEl.innerHTML = "Vnesi datum in izdatek prosim";
        } else {
            racIn = parseFloat(racIn);
            datIn = new Date(datIn);
            if(datIn.getYear() == 119){
            let retObj = {"znesek":racIn, "datum":datIn};
            arrayPodatkov.push(retObj);
            aggregateByMonths();
            renderTable();
            renderCanvas();
            }
            else{
                vpisiEl.innerHTML = "Vnesi datum letošnjega leta prosim";
            }

        }

    } else {
        vpisiEl.innerHTML = "Vpiši številko prosim";
    }
}


function updateOnKeypress(){
    const spentEl = document.getElementById('spent');
    const whenEl  = document.getElementById('when');
    const submitEl = document.getElementById("submit");

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

	function handleDragOver(evt) {
					evt.stopPropagation();
					evt.preventDefault();
					evt.dataTransfer.dropEffect = 'copy';
	}

	function handleFileSelect(evt) {
					evt.stopPropagation();
					evt.preventDefault();

					let files = [];
					// drag and drop functionaliy
					if(evt.dataTransfer != null){
									files = evt.dataTransfer.files;
					}
					// file select input functionality
					if (files.length <= 0){
									files = this.files;
					}

					let output = [];
					for (let i = 0, file; file = files[i]; i++) {
									if(files[i].type == "text/xml"){
													let reader = new FileReader();
													let parser = new DOMParser();

													reader.addEventListener('load', function(e) {
																	let xmlDoc = parser.parseFromString(e.target.result, "text/xml");
																	let returnedObject = processXML(xmlDoc);
																	arrayPodatkov.push(returnedObject);
																	aggregateByMonths();
																	renderTable();
																	renderCanvas();
													});
													reader.readAsText(file);
													output.push(file);
									}
					}
					renderDragAndDropOutput(output);
	}
	dragAndDropEl.addEventListener('dragover', handleDragOver, false);
	dragAndDropEl.addEventListener('drop', handleFileSelect, false);
	fileInputEl.addEventListener('change', handleFileSelect, false);
}
