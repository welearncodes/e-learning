$(document).ready(function() {
    $('#inputConsole').find('input').focus();
});
$('#inputConsole').cssConsole({
	inputName:'consoleConsole',
	charLimit: 60,
	onEnter: function(){
		addLine("> "+$('#inputConsole').find('input').val());
		execCommand($('#inputConsole').find('input').val());
		$('#inputConsole').cssConsole('reset');	
		$('#inputConsole').find('input').focus();
	}
});
var lineLimit = 15;
$('.containerConsole').on('click', function() {
	$('#inputConsole').find('input').focus();
});
function addLine(input, style, color) {
		if($('.consoleConsole div').length==lineLimit) {
			$('.consoleConsole div').eq(0).remove();
		}
		style = typeof style !== 'undefined' ? style : 'line';
		color = typeof color !== 'undefined' ? color : 'white';
		$('.consoleConsole').append('<div class="'+style+' '+color+'">'+input+'</div>');
}
function execCommand(command){
    if ( commands[command] ) {
      return commands[command]();
    } else {
      addLine("Command '" + command + "' was not found.");
    }   
}
var commands = {
	help: function (){
		addLine("Available command list:");
		addLine("Type `help name' to find out more about the function `name'.");
		addLine("git init", 'margin');
		addLine("git status", 'margin');
		addLine("git add", 'margin');
		addLine("git commit", 'margin');
		addLine("git clone", 'margin');
		addLine("git pull", 'margin');
	},

	"help git init": function (){
		addLine("Command description:");
		addLine("$ git init [project-name]", 'margin');
		addLine("Creates a new local repository with the specified name.");
	},

	"help git status": function (){
		addLine("Command description:");
		addLine("$ git status", 'margin');
		addLine("Lists all new or modified files to be commited.");
	},

	"help git add": function (){
		addLine("Command description:");
		addLine("$ git add [file]", 'margin');
		addLine("Snapshots the file in preparation for versioning.");
	},

	"help git commit": function (){
		addLine("Command description:");
		addLine("$ git commit -m [descriptive message]", 'margin');
		addLine("Records file snapshots permanently in version history.");
	},

	"help git clone": function (){
		addLine("Command description:");
		addLine("$ git clone [url]", 'margin');
		addLine("Downloads a project and its entire version history.");
	},

	"help git pull": function (){
		addLine("Command description:");
		addLine("$ git pull", 'margin');
		addLine("Downloads bookmark history and incorporates changes.");
	},

	"git init": function (){
		addLine("Initialized empty Git repository in /home/root/.git/");
	},

	"git status": function (){
		addLine("On branch master");
		addLine("Initial commit", 'margin');
		addLine(" ", 'margin');
		addLine("Untracked files:");
		addLine("./html",'margin');
		addLine("./html/index.html",'margin');
		addLine(' (use "git add <file>..." to include in what will be committed) ');
	},


	dir: function(){
		addLine(".");
		addLine("..");
		addLine("Applications", 'margin', 'blue');
		addLine("Documents", 'margin', 'blue');
		addLine("Downloads", 'margin', 'blue');
		addLine("Movies", 'margin', 'blue');
		addLine("Music", 'margin', 'blue');
		addLine("System", 'margin', 'blue');		
	},
	ps: function() {
		addLine("Running processes:");
		addLine("name: browser pid:8876", 'margin');
		addLine("name: movie player pid:3213", 'margin');
		addLine("name: system pid:0012", 'margin');
	}
$(document).ready(function() {
    $('#inputConsole').find('input').focus();
});
$('#inputConsole').cssConsole({
	inputName:'console',
	charLimit: 60,
	onEnter: function(){
		addLine("> "+$('#inputConsole').find('input').val());
		execCommand($('#inputConsole').find('input').val());
		$('#inputConsole').cssConsole('reset');	
		$('#inputConsole').find('input').focus();
	}
});
$('.containerConsole').on('click', function() {
	$('#inputConsole').find('input').focus();
});
function addLine(input, style, color) {
		if($('.consoleConsole div').length==lineLimit) {
			$('.consoleConsole div').eq(0).remove();
		}
		style = typeof style !== 'undefined' ? style : 'line';
		color = typeof color !== 'undefined' ? color : 'white';
		$('.consoleConsole').append('<div class="'+style+' '+color+'">'+input+'</div>');
}
function execCommand(command){
    if ( commands[command] ) {
      return commands[command]();
    } else {
      addLine("Command '" + command + "' was not found.");
    }   
}
var commands = {
	"git help": function (){
		addLine("Available command list:");
		addLine("Type `help name' to find out more about the function `name'.");
		addLine("git init", 'margin');
		addLine("git status", 'margin');
		addLine("git add", 'margin');
		addLine("git commit", 'margin');
		addLine("git clone", 'margin');
		addLine("git pull", 'margin');
	},

	"help git init": function (){
		addLine("Command description:");
		addLine("$ git init [project-name]", 'margin');
		addLine("Creates a new local repository with the specified name.");
	},

	"help git status": function (){
		addLine("Command description:");
		addLine("$ git status", 'margin');
		addLine("Lists all new or modified files to be commited.");
	},

	"help git add": function (){
		addLine("Command description:");
		addLine("$ git add [file]", 'margin');
		addLine("Snapshots the file in preparation for versioning.");
	},

	"help git commit": function (){
		addLine("Command description:");
		addLine("$ git commit -m [descriptive message]", 'margin');
		addLine("Records file snapshots permanently in version history.");
	},

	"help git clone": function (){
		addLine("Command description:");
		addLine("$ git clone [url]", 'margin');
		addLine("Downloads a project and its entire version history.");
	},

	"help git pull": function (){
		addLine("Command description:");
		addLine("$ git pull", 'margin');
		addLine("Downloads bookmark history and incorporates changes.");
	},

	"git init": function (){
		addLine("Initialized empty Git repository in /home/root/.git/");
	},

	"git status": function (){
		addLine("On branch master");
		addLine("Initial commit", 'margin');
		addLine(" ", 'margin');
		addLine("Untracked files:");
		addLine("./html",'margin');
		addLine("./html/index.html",'margin');
		addLine(' (use "git add <file>..." to include in what will be committed) ');
	},


	dir: function(){
		addLine(".");
		addLine("..");
		addLine("Applications", 'margin', 'blue');
		addLine("Documents", 'margin', 'blue');
		addLine("Downloads", 'margin', 'blue');
		addLine("Movies", 'margin', 'blue');
		addLine("Music", 'margin', 'blue');
		addLine("System", 'margin', 'blue');		
	},
	ps: function() {
		addLine("Running processes:");
		addLine("name: browser pid:8876", 'margin');
		addLine("name: movie player pid:3213", 'margin');
		addLine("name: system pid:0012", 'margin');
	}
}