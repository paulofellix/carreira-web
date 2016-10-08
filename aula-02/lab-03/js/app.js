$(function(){
	$("#tasks").sortable();
	$("#tasks").disableSelection();
});

document.addEventListener('keypress',verificaTecla,false);

function verificaTecla(e){
	if (e.which == 13){
		adicionarTarafa();
	}
}

function adicionarTarafa(){
	
	if ($("#new-task").val().length === 0)
	{
		alert('Digite uma tarefa!');
		return;
	}

	// var lista = document.getElementById("tasks");

	var item = document.createElement('li');
	item.setAttribute("class","list-group-item");

	var checkBox = document.createElement('input');
	checkBox.setAttribute('type','checkbox');
	checkBox.setAttribute('onclick','checkTask(this)');

	var span = document.createElement('span');
	span.innerHTML = $('#new-task').val();

	var btnRemover = document.createElement('button');
	btnRemover.setAttribute("onclick","removeTask(this)");
	btnRemover.setAttribute("class","btn btn-danger btn-sm pull-right");
	btnRemover.innerHTML = "Remover";

	item.appendChild(checkBox);
	item.appendChild(span);
	item.appendChild(btnRemover);

	$('#tasks').append(item).hide().fadeIn();
	
	$('#new-task').val("");
	salvarTasks();
}

function checkTask(checkbox){
	
	var li = checkbox.parentNode;
	 console.log(li);
	if (checkbox.checked){
		li.className += " completed";
	}else{
		li.className = "list-group-item";
	}
}

function removeTask(button){

	var li = $(button).closest('li');
	li.fadeOut(function(){
		li.remove();
		salvarTasks();
	});
}

function salvarTasks(){
	localStorage.tarefas = $('#tasks').html();
	if ($('#tasks > li').length === 0)
	{
		localStorage.removeItem('tarefas');
	}
};

function carregarTarefas(){
	if (localStorage.tarefas)
	{
		$('#tasks').html(localStorage.tarefas);
	}
}