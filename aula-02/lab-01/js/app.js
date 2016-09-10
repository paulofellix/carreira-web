document.addEventListener('keypress',verificaTecla,false);

function verificaTecla(e){
	if (e.which == 13){
		adicionarTarafa();
	}
}

function adicionarTarafa(){
	var tarefa = document.getElementById("new-task");
	
	if (tarefa.value.length === 0)
	{
		alert('Digite uma tarefa!');
		return;
	}

	var lista = document.getElementById("tasks");

	var item = document.createElement('li');

	var checkBox = document.createElement('input');
	checkBox.setAttribute('type','checkbox');
	checkBox.setAttribute('onclick','checkTask(this)');

	var span = document.createElement('span');
	span.innerHTML = tarefa.value;

	var btnRemover = document.createElement('button');
	btnRemover.setAttribute("onclick","removeTask(this)");
	btnRemover.innerHTML = "Remover";

	item.appendChild(checkBox);
	item.appendChild(span);
	item.appendChild(btnRemover);

	lista.appendChild(item);

	if (lista.childNodes.length > 0)
	{
		lista.style.display = "block";
	}
	
	tarefa.value = "";
}

function checkTask(checkbox){
	
	var li = checkbox.parentNode;
	 console.log(li);
	if (checkbox.checked){
		li.className = "completed";
	}else{
		li.className = "";
	}
}

function removeTask(button){
	
	var li = button.parentNode;
	var ul = li.parentNode;
	ul.removeChild(li);

}