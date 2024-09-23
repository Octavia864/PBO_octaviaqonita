<?php
class Employee:{
    def _init_(self, salary, experience):
        self.salary = salary
        self.experience = experience
    def increase_salary(self):
        if self.experience < 1:
            return self.salary
        elif self.experience >= 1 and self.experience <= 10:
            bonus = min(self.experience, 10) * 0.01
            return self.salary + bonus
        else:
            bonus = min(self.experience - 10, 20) * 0.02
            return self.salary + bonus
class Director(Employee):{
    def _init_(self, salary, experience):
        super()._init_(salary, experience)
        self.bonus = 0.5 * experience + 0.1 * experience
    def increase_salary(self):
        bonus = min(self.experience, 20) * 0.02
        return self.salary + bonus + self.bonus
class Salesman(Employee):{
    def _init_(self, salary, experience, product_price, stock):
        super()._init_(salary, experience)
        self.product_price = product_price
        self.stock = stock
    def increase_salary(self, sales):
        if sales > 0.7 * self.stock:
            bonus = sales * self.product_price * 0.1
        else:
            bonus = sales * self.product_price * 0.03
        return self.salary + bonus
}
}
}
<?