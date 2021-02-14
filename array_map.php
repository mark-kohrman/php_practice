<?php
#  1. Start with an array of numbers and create a new array with each number times 3.
#     For example, [1, 2, 3] becomes [3, 6, 9].
// $i = 0;
// $a = [1, 2, 3];
// $new_arr = [];
// while ($i < count($a)) {
//   array_push($new_arr, $a[$i] * 3);
//   $i += 1;
// }
// print_r($new_arr);

#  2. Start with an array of strings and create a new array with each string upcased.
#     For example, ["hello", "goodbye"] becomes ["HELLO", "GOODBYE"].

#  3. Start with an array of hashes and create a new array of string values from each hash's :name key.
#     For example, [{name: "Alice", age: 27}, {name: "Blane", age: 16}] becomes ["Alice", "Blane"].
// $people = [["name" => "Alice", "age" => 27], ["name" => "Blane", "age" => 16]];
// $i = 0;
// $names = [];
// while ($i < count($people)) {
//   array_push($names, $people[$i]["name"]);
//   $i += 1;
// }
// print_r($names);
#  4. Start with an array of numbers and create a new array with each number plus 7.
#     For example, [1, 2, 3] becomes [8, 9, 10].

#  5. Start with an array of strings and create a new array with each string's length.
#     For example, ["hello", "goodbye"] becomes [5, 7].

#  6. Start with an array of hashes and create a new array of number values from each hash's :age key.
#     For example, [{name: "Alice", age: 27}, {name: "Blane", age: 16}] becomes [27, 16].
// $people = [["name" => "Alice", "age" => 27], ["name" => "Blane", "age" => 16]];
// $i = 0;
// $ages = [];
// while ($i < count($people)) {
//   array_push($ages, $people[$i]["age"]);
//   $i += 1;
// }
// print_r($ages);
#  7. Start with an array of numbers and create a new array with each number divided by 2.
#     For example, [1, 2, 3] becomes [0.5, 1.0, 1.5].

#  8. Start with an array of strings and create a new array with each string's first letter only.
#     For example, ["hello", "goodbye"] becomes ["h", "g"].

# 9.  Start with an array of hashes and create a new array of number values from each hash's :age key times 2.
#     For example, [{name: "Alice", age: 27}, {name: "Blane", age: 16}] becomes [54, 32].

# 10. Start with an array of numbers and create a new array with each number converted into a string.
#     For example, [1, 2, 3] becomes ["1", "2", "3"].
$arr = [1, 2, 3];
$strings = [];
$i = 0;
while ($i < count($arr)) {
  array_push($strings, strval($arr[$i]));
  $i += 1;
}
print_r($strings);
echo gettype($strings[0]);


# SOLUTIONS (using while loop): https://gist.github.com/peterxjang/b9ac4390aad2301a2238efc95c904f3d
# SOLUTIONS (using .each shortcut): https://gist.github.com/peterxjang/66598fd7cdbc67fe663624e217cebbaf
# SOLUTIONS (using .map shortcut): https://gist.github.com/peterxjang/23a8f8a51601e4288ba3a8aa6d1f1c98
