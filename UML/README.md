@startuml
class Worker {
    - name : String
    - level : WorkerLevel
    - baseSalary : Double
    - contracts : List<HourContract>
    - department : Department

    + addContract(contract : HourContract) : void
    + removeContract(contract : HourContract) : void
    + income(year : Integer, month : Integer) : Double
    + getDepartment() : Department
    + getContracts() : List<HourContract>
}

class HourContract {
    - date : Date
    - valuePerHour : Double
    - hours : Integer

    + totalValue() : Double
    + getDate() : Date
    + getValuePerHour() : Double
    + getHours() : Integer
}

class Department {
    - name : String
    + getName() : String
    + setName(name : String) : void
}

enum WorkerLevel {
    JUNIOR
    MID_LEVEL
    SENIOR
}

Worker "1" -- "1" Department : works in >
Worker "1" -- "*" HourContract : has contracts >

