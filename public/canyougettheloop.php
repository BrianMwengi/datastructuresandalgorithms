<?php
/**
 * Finds the size of a loop in a linked list using Floyd's Cycle-Finding Algorithm
 * @param Node $node The starting node of the linked list
 * @return int The size of the loop
 */
function loop_size(Node $node): int {
    // Initialize two pointers - slow (tortoise) and fast (hare)
    // Move slow by 1 node and fast by 2 nodes
    $tortoise = $node->getNext();                // Tortoise moves 1 step
    $hare = $node->getNext()->getNext();        // Hare moves 2 steps
    
    // First Phase: Find meeting point inside the loop
    // Tortoise moves 1 step while hare moves 2 steps until they meet
    while ($tortoise !== $hare) {
        $tortoise = $tortoise->getNext();       // Move tortoise 1 step
        $hare = $hare->getNext()->getNext();    // Move hare 2 steps
    }
    
    // Second Phase: Count the loop size
    // Start count from 1 since we're already at meeting point
    $count = 1;
    $hare = $tortoise->getNext();               // Move hare one step ahead
    
    // Move hare one step at a time until it meets tortoise again
    while ($tortoise !== $hare) {
        $hare = $hare->getNext();               // Move hare 1 step
        $count++;                               // Increment loop size counter
    }
    
    // Return the size of the loop
    return $count;
}

function loop_size(Node $n): int {
    // Declare an empty array to store visited nodes
    $a = [];
    // Loop through the linked list until we find a node that has already been visited
    while (!in_array($n, $a, true)) {
    // Add the current node to the array
      array_push($a, $n);
    // Move to the next node
      $n = $n->getNext();
    }
    // Return the size of the loop by subtracting the index of the node where the loop starts from the total number of nodes
    return count($a) - array_search($n, $a, true);
  }

    function loop_size(Node $n): int {
      // Use object IDs as array keys for O(1) lookup
      $visited = [];
      $position = 0;
      
      // Traverse the linked list until we reach a node that has already been visited
      while (!isset($visited[spl_object_id($n)])) {
          $visited[spl_object_id($n)] = $position++;
          $n = $n->getNext();
      }
      
      // Return the size of the loop by subtracting the position of the node where the loop starts from the total number of nodes
      return $position - $visited[spl_object_id($n)];
  }