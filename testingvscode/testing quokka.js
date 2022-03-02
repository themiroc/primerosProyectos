const person = {
    name: 'Jonh',
    age: '30',
    location: 'FL'
}

console.log(person)
console.log(person.name)
console.log(person.age)
console.log(person.location)

function add(x, y) {
    return x + y
}

console.log(add(3, 4))

const nums = [11, 30, 22, 9, 14]

console.log(nums.pop()) 
console.log(nums.pop())

const sum = nums.reduce((acc, cur) => acc + cur) //accumulator and current value

sum

const over = nums.filter(num => num > 20) //? (would show me the result)

over



const moment = require('moment') // installing packages is for Pro version

const todaysDate = moment().format('MMMM Do YYYY, h:mm:ss')

console.log(todaysDate);


