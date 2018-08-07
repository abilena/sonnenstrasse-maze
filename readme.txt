=== sonnenstrasse-maze ===
Contributors: Klemens
Donate link: 
Tags: rpg sonnenstrasse maze
Requires at least: 3.9
Tested up to: 4.8.0
Stable tag: trunk

This plugin allows you to display a navigateable maze in your posts using the shortcodes:

[aventurien-maze name="sample"]Sample Maze[/aventurien-maze]

== Description ==

You can use this plugin to display mazes.

For example:

`
[aventurien-maze name="sample"]Sample Maze[/aventurien-maze]
`

Press the WSAD or cursor keys to navigate and SPACE to interact (remove overlays).
Press F1 or H to display the help screen.
Press F12 to view the map as a whole (for debugging purposes).

To create your own maps you need to create two files.
mymap.maze.css
mymap.overlays.css
Where mymap is the name of your new map.
Both files define background-images for each map block. 
The map is 12x12 and #Block_A04 is the 4th column in the first row.
Currently the initial position is always #Block_F09 (row 6, col 9).

== Installation ==

1. Upload <strong>sonnenstrasse-maze</strong> folder to the <strong>/wp-content/plugins/</strong> directory.
2. Activate the plugin through the <strong>Plugins</strong> menu in WordPress.
3. That's all.

== Changelog ==

= 1.00 =
* first version
