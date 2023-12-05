# PHP Graph Coloring Algorithm

This PHP script demonstrates a graph coloring algorithm that assigns colors to vertices of a graph in a way that no adjacent vertices have the same color. It uses a backtracking approach to solve the graph coloring problem.

## Usage
1. Ensure PHP is installed on your system.
2. Execute the script by running `php graph_coloring.php`.
3. Check the output to see the colors assigned to each vertex.

## Example
The script includes an example graph represented as an adjacency matrix. You can visualize the graph using [GraphOnline](https://graphonline.ru/en/) for better understanding and testing.

## Code
The main algorithm is implemented in PHP and involves a recursive function `solve_graph_coloring()` that backtracks to assign colors to vertices while checking adjacency constraints.

## Note
- Adjust the graph structure and the number of colors allowed (`$maximumColorsAllowed`) to experiment with different scenarios.
- This script provides a foundational understanding of graph coloring algorithms in PHP.

