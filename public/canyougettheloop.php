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