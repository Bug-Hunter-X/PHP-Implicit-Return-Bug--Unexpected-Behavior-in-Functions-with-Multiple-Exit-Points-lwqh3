function myFunction() {
  // Some code here...
  if (someCondition) {
    return null; // Explicitly return null if someCondition is true
  }
  // More code that will always execute if someCondition is false
  return someValue; // Explicitly return a value
}