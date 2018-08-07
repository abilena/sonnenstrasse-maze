
var MAZE_COLS=12;
var MAZE_ROWS=12;
var TILESIZE=400;

var pos_x = -8;
var pos_y = -5;

var current_keyCode = 0;

var maze_element;
var movement_x = null;
var movement_y = null;
var started = false;

function start()
{
    var help = document.getElementById("Help");
    help.style.display = 'none';
    var curtain = document.getElementById("Curtain");
    curtain.style.display = 'none';
    started = true;
}

function initialize()
{
	maze_element = document.getElementById("Maze");
	maze_element.style.top = (pos_y * TILESIZE) + 'px'
	maze_element.style.left = (pos_x * TILESIZE) + 'px'
	
	var col = 0;
	var row = 0;
	
	for (row = 0; row < MAZE_ROWS; row++)
	{
		for (col = 0; col < MAZE_COLS; col++)
		{
			var block = getElement("Block", row, col);
			var url = window.getComputedStyle(block, false).backgroundImage.slice(4, -1);
			url = url.substring(url.lastIndexOf('/')+1);
			url = url.substring(url.lastIndexOf('-')+1);
			url = url.substring(0, url.lastIndexOf('.'));
			if (url.lastIndexOf('_') >= 0)
				url = url.substring(0, url.lastIndexOf('_'));
			block.allowedPaths = url.toUpperCase();
		}
	}
	
	window.addEventListener("keydown", updateKey, true);
	var id = window.setInterval(update, 100);
}

function getElement(name, row, col)
{
	var row_val = (row + 1) + "";
	if (row_val.length < 2)
		row_val = "0" + row_val;
	
	var col_val = String.fromCharCode(65 + col);
	var block_id = name + "_" + col_val + row_val;
	var block = document.getElementById(block_id);
	return block;
}

function updateKey(e)
{
    if (!started)
        return;

    e = e || window.event;

	if (current_keyCode == 0)
		current_keyCode = e.keyCode;
	
	e.preventDefault();
}

function update()
{
	doMovement();
}

function doMovement()
{
	if (movement_x == null && movement_y == null && current_keyCode != 0)
	{
		var keyCode = current_keyCode;
		
		if (!isKeyCodeValid(keyCode))
		{
			current_keyCode = 0;
			return;
		}

		switch (keyCode) {
			case 38:   // arrow up key
			case 87: // W key
				movement_x = null;
				movement_y = new SmoothMovement(pos_y * TILESIZE, (pos_y + 1) * TILESIZE);
				movement_y.animate(20, function(py) { maze_element.style.top = py + 'px'; }, function() { movement_y = null; pos_y += 1; current_keyCode = 0; });
				break;
			case 37: // arrow left key
			case 65: // A key
				movement_x = new SmoothMovement(pos_x * TILESIZE, (pos_x + 1) * TILESIZE);
				movement_x.animate(20, function(px) { maze_element.style.left = px + 'px'; }, function() { movement_x = null; pos_x += 1; current_keyCode = 0; });
				movement_y = null;
				break;
			case 40: // arrow down key
			case 83: // S key
				movement_x = null;
				movement_y = new SmoothMovement(pos_y * TILESIZE, (pos_y - 1) * TILESIZE);
				movement_y.animate(20, function(py) { maze_element.style.top = py + 'px'; }, function() { movement_y = null; pos_y -= 1; current_keyCode = 0; });
				break;
			case 39: // arrow right key
			case 68: // D key
				movement_x = new SmoothMovement(pos_x * TILESIZE, (pos_x - 1) * TILESIZE);
				movement_x.animate(20, function(px) { maze_element.style.left = px + 'px'; }, function() { movement_x = null; pos_x -= 1; current_keyCode = 0; });
				movement_y = null;
				break;
            case 112: // f1 key
            case 72: // H key
                current_keyCode = 0;
                var help = document.getElementById("Help");
                help.style.display = 'block';
                break;
            case 123: // f12 key
                current_keyCode = 0;
                var url = window.location.href;
                url = url.replace('Maze.php', 'Map.php');
                window.location.href = url;
                break;
			case 32: // space key
				var overlay = getElement("Overlay", -pos_x, -pos_y);
				if (overlay == null)
					return;
				
				overlay.style.backgroundImage = 'url("")';
				current_keyCode = 0;
				break;
			case 116: // f5 key (refreshing browser)
			case 144: // num-lock key
				break;
			default:
				break;
		}
	}
}

function isKeyCodeValid(keyCode)
{
	var block = getElement("Block", -pos_x, -pos_y);
	if (block == null)
		return false;
	
	var allowedPaths = block.allowedPaths;
		
	switch (keyCode) {
		case 38:   // arrow up key
		case 87: // W key
			return (allowedPaths.indexOf('N') > -1);
		case 37: // arrow left key
		case 65: // A key
			return (allowedPaths.indexOf('W') > -1);
		case 40: // arrow down key
		case 83: // S key
			return (allowedPaths.indexOf('S') > -1);
		case 39: // arrow right key
		case 68: // D key
			return (allowedPaths.indexOf('E') > -1);
		case 32: // space key
        case 72: // H key
        case 112: // f1 key
        case 123: // f12 key
			return true;
		case 116: // f5 key (refreshing browser)
		case 144: // num-lock key
		default:
			return false;
	}
}

function button(keyCode)
{
    current_keyCode = keyCode;
    doMovement();
}

