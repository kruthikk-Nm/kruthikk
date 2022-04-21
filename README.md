# kruthikk
Insurance Project Using Python 
import random
import datetime

#global list declartion
name = []
age = []
phnno = []
gender = []
city = []
pincode = []
income = []
occupation = []
aadhar = []
panno = []
insurance = []
price = []
vehiclenumber=[]
vehicleage=[]

i=0

#home function

def Home():  
    print("\t\t\t\t\t\t WELCOME to Insurance portal \n") 
    print("\t\t\t 1 HouseInsurance\n") 
    print("\t\t\t 2 VehicleIsurance\n") 
    print("\t\t\t 3 VehicleInsurance Replacement price\n") 
    print("\t\t\t 4 LifeInsurance\n") 
    print("\t\t\t 5 Montly/annual vehical maintainace\n") 
    print("\t\t\t 6 HouseInsurance Replacement price\n")
    print("\t\t\t 0 Exit\n") 

    ch=int(input("->")) 

    if ch == 1:
        print(" ")
        HouseInsurance()

    elif ch == 2: 
        print(" ") 
        vehicleInsurance() 
      
    elif ch == 3: 
        print(" ") 
        main2() 
      
    elif ch == 4: 
        print(" ") 
        LifeInsurace()
      
    elif ch == 5: 
        print(" ") 
        main3() 

    elif ch == 6: 
        print(" ") 
        main()  
      
    else: 
        exit()

def HouseInsurance():
    global i
    print("House_Insurance")
    print(" ")
    print("first plan scheme:building and No.of floors should be less than or equal to 5 and 2") 
    print("1.premium  = 5000Rs")
    print("2.halfyearlypremium = 2650Rs")
    print("3.Quaterlyyearpremium  = 1350Rs")
    print(" ")

    
    print("Enter the following details :")
    name = str(input("Name: ")) 
    phno = str(input("Phone No.: ")) 
    age = str(input("Age: "))
    gender = str(input("gender: ")) 
    city = str(input("city: "))
    pincode = str(input("pincode: "))
    income = str(input("Income: "))
    occupation = str(input("occupation: "))
    aadhar = str(input("Aadhar: "))
    panno = str(input("panno: "))

 

    ch1=int(input("Enter your buildings age: "))
    ch2=int(input("enetr your numberOfFloors: "))

    if ch1 <= 50 and ch2 <= 20:
         ch3=int(input("enter your option: "))
    
    if ch3 == 1:
            
            print(" --------------Yearly-InsuranceType-premium--------------")   
            print("Price- 5000rs")
            print("thank you for insuring ur house,please visit again")
             
    elif ch3 == 2: 
              
            print("--------------- InsuranceType-halfyearlypremium------------")   
            
            print("Price- 2650rs")
            print("thank you for insuring ur house,please visit again") 
    elif ch3 == 3:
              
            print("---------------- InsuranceType-Quaterlyyearpremium----------------")   
            
            print("Price- 1350rs")
            print("thank you for insuring ur house,please visit again")
            
    else:
            print("please try again you entered wrong choice/contact customer service ")
            
            
    print("--------------STATEMENT OF HOUSE INSURANCE---------------------------------------------")      
    print("entered name is : ",name)
    print("entered phone number is : ",phno) 
    print("entered age is : ",age) 
    print("Entered gender is : ",gender)
    print("Entered city is : ",city) 
    print("Entered pincode is :",pincode) 
    print("Entered income is : ",income) 
    print("Entered occupation is :",occupation) 
    print("Entered aadhar number is :",aadhar) 
    print("entered panno is : ",panno) 
        
def askforreplacementcost():
    replacementcost=float(input("please enter the replacement cost of your building : "))
    
    return replacementcost

def calculatemininsurance(replacementcost):
    mininsurance=(80/100)*replacementcost
    return mininsurance

def printdetails(replacementcost,mininsurance):
    print("financial experts advice that you sholud insurance your house for Rs"+format(mininsurance,",.2f")+\
          "  because that's 80% of your replacement cost of your"+\
         "building which is Rs" + \
          format(replacementcost,",.2f"))

def main():
    replacementcost=askforreplacementcost()
    mininsurance=calculatemininsurance(replacementcost)
    printdetails(replacementcost,mininsurance)
    

def vehicleInsurance():
    global i
    print("vehicle_Insurance")
    print(" ")
    print("first plan scheme:vehicles age should be less than 10 and number of wheel should be greater than or equal to 2") 
    print("1.premium  = 500Rs")
    print("2.halfyearlypremium = 250Rs")
    print("3.Quaterlyyearpremium  = 150Rs")
    print(" ")
    
    
    print("Enter the following details :")
    name = str(input("Name: ")) 
    vehiclenumber = str(input("vehiclenumber.: ")) 
    vehicleage = str(input("VehicleAge: "))
    city = str(input("city: "))

   

 

    ch1=int(input("Enter your vehicle'sage: "))
    ch2=int(input("enetr vehicle's number of wheels: "))

    if ch1 <= 10 and ch2 >=2 :
         ch3=int(input("enter your required plan "))
    
    if ch3 == 1:
            
            print("--------------yearly-InsuranceType-premium-------------")   
            print("Price- 500rs")
            print("thank you for insuring ur vehicle,please visit again")
             
    elif ch3 == 2: 
              
            print("-----------------InsuranceType-halfyearlypremium--------------")   
            
            print("Price- 250rs")
            print("thank you for insuring ur vehicle,please visit again") 
    elif ch3 == 3:
              
            print("--------------InsuranceType-Quaterlyyearpremium--------------------")   
            
            print("Price- 150rs")
            print("thank you for insuring ur vehicle,please visit again")
            
    else:
            print("*************please try again you entered wrong choice*************")
          
        
    print("--------------STATEMENT OF VEHICLE INSURANCE-------------------------------")      
    print("entered name is : ",name)
    print("entered VEHICLE number is : ",vehiclenumber) 
    print("entered vehicle age is : ",vehicleage) 
    print("Entered city is : ",city) 
        
        
        
def askforreplacementcost():
    replacementcost=float(input("please enter the replacement cost of your building : "))
    
    return replacementcost

def calculatemininsurance(replacementcost):
    mininsurance=(80/100)*replacementcost
    return mininsurance

def printdetails(replacementcost,mininsurance):
    print("financial experts advice that you sholud insurance your house for Rs"+format(mininsurance,",.2f")+\
          "  because that's 80% of your replacement cost of your"+\
         "building which is Rs" + \
          format(replacementcost,",.2f"))

def main():
    replacementcost=askforreplacementcost()
    mininsurance=calculatemininsurance(replacementcost)
    printdetails(replacementcost,mininsurance)
    
    
        
def askforreplacementcost2():
    replacementcost=float(input("please enter the replacement cost of your vehicle : "))
    
    return replacementcost

def calculatemininsurance2(replacementcost):
    mininsurance=(60/100)*replacementcost
    return mininsurance

def printdetails2(replacementcost,mininsurance):
    print("financial experts advice that you sholud insurance your vehicle for Rs"+format(mininsurance,",.2f")+\
          "  because that's 60% of your replacement cost of your"+\
         "vehicle which is Rs" + \
          format(replacementcost,",.2f"))

def main2():
    replacementcost=askforreplacementcost2()
    mininsurance=calculatemininsurance2(replacementcost)
    printdetails2(replacementcost,mininsurance)
    

    
def LifeInsurace():
    lpremium=10000
    lage=int(input("Enter your age : "))
      
    if lage>60:
            
        print("you are a senior citizen the lifeinsurance is",500+lpremium)
    
    elif lage >=18 and lage<=60:
        print("Base premium is ",lpremium)
              
    elif lage<=18:
                
        print("your are a minor please contact customer service")

    q=input("are you a smoker ? y/n :")  
    if q == "y" or q == "Y":
        print("***********premium is : ",10500+lpremium)
    elif q== "n" or q== "N":
        print("***********premium is : ",lpremium)
        
    p=input("Is your alcohol intake above 750ml? ,y/n")
    if p == "y" or p == "Y":
        print("************premium is :",2500+lpremium)
    elif p== "n" or p== "N":
        print("***********premium is : ",lpremium)
        
    print("------------------------------------------------------------------ ")
                
                

                      
    
    
    
    
def askforexpenses():
    monthlyloanpayment=float(input("how much do you pay for your loan every month : "))
    monthlyinsurancepayment=float(input("how much do you pay for your insurance every month : "))
    monthlyfuelpayment=float(input("how much do you pay for your fuel every month : "))
    monthlyoilpayment=float(input("how much do you pay for your oil every month : "))
    monthlytirepayment=float(input("how much do you pay for your tire every month : "))
    monthlymaintenacepayment=float(input("how much do you pay for your maintenace every month : "))
    
    return monthlyloanpayment,monthlyinsurancepayment,monthlyfuelpayment,monthlyoilpayment,\
    monthlytirepayment,monthlymaintenacepayment

def calculatetotalmonthlycost(payment1,payment2,payment3,payment4,payment5,payment6):
    
    totalmonthlycost=payment1+payment2+payment3+payment4+payment5+payment6
    return totalmonthlycost

def calculatetotalannualcost(totalmonthlycost):
    totalannualcost=totalmonthlycost*12
    return totalannualcost

def printdetails3(totalmonthlycost,totalannualcost):
    print("your total monthly cost is Rs"+format(totalmonthlycost,",.2f")+\
          "\nyour total monthly cost is Rs"+format(totalannualcost,",.2f"))    

    
def main3():
    loanpayment,insurancepayment,fuelpayment,oilpayment,tirepayment,maintenancepayment=askforexpenses()
    
    totalmonthlycost=calculatetotalmonthlycost(loanpayment,insurancepayment,fuelpayment,oilpayment,tirepayment,maintenancepayment)
    
    totalannualcost=calculatetotalannualcost(totalmonthlycost)
    
    printdetails3(totalmonthlycost,totalannualcost)
    
    

    
            
                
Home()
