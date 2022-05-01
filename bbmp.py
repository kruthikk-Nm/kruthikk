import os

print("=" * 70)
print("***************** BBMP GRIVEVANCE CELL/PORTAL*************************")
print("=" * 70)

def login():
    print("LOGIN to Continue...")
    print("=" * 70)
    ch = int(input("Press 1 to login as User/citizen or Press 0 to login as bbmp contractor: "))
    if ch == 1:
        while True:
            print("LOGIN as User/citizen:")
            username = "User"
            password = "User123"
            uname = input("Enter your Username: ")
            pword = input("Enter your password: ")
            if (uname == username) and (pword == password):
                print("LOGIN SUCCESSFULL")
                break
            else:
                print("LOGIN UNSUCCESSFULL")
                print("INVALID CREDENTIALS.... Please try again....")
                continue
        print("\n")
        menu()

    if ch == 0:
        while True:
            print("LOGIN as registered contractor :")
            uname = input("Enter your Username: ")
            pword = input("Enter your password: ")
            file1 = open("contractor Details.txt", "r")
            flag = 0
            index = 0
            for line in file1:
                index += 1
                if uname in line:
                    flag = 1
                    break
            if flag == 0:
                print("You are not a registered contractor with us")
            else:
                with open("contractor Details.txt") as f:
                    lines = f.readlines()
                    str1 = lines[index - 1]
                    lst1 = str1.split(" ")
                    if ((uname == lst1[3]) and (pword == lst1[4])):
                        print("LOGIN SUCCESSFULL")
                        break
                    else:
                        print("LOGIN UNSUCCESSFULL")
                        print("INVALID CREDENTIALS.... Please try again....")
                        continue
        file1.close()
        menu()
        j = 1


def menu():
    print("=" * 70)
    print("Menu Bar...")
    print("=" * 70)
    print("Select an Action to Continue:")
    print("1. Add complaint details")
    print("2. Delete complaint details")
    print("3. Modify complaint details")
    print("4. Search complaint details")
    print("5. Search by Index complaint  details")
    print("6. View complaint")
    print("7. Register contractor")
    print("8. Remove contractor")
    print("9. Log out as contractor")
    print("10. Log out as user")
    print("")
    print("***********************************************************")
    num = int(input("Enter your choice: "))
    print("")
    if (num == 1):
        add_complaint()
        return
    if (num == 2):
        delete_complaint()
        return
    if (num == 3):
        update_complaint()
        return
    if (num == 4):
        search_complaint()
        return
    if (num == 5):
        search_by_index_complaint()
        return
    if (num == 6):
        view_all_complaint()
        return
    if (num == 7):
        reg_contractor()
        return
    if (num == 8):
        delete_contractor()
        return
    if (num == 9):
        log_out()
        return
    if (num == 10):
        log_out()
        return


def add_complaint():
    print("=" * 70)
    print("Add new complaint")
    print("=" * 70)
    print("Enter new complaint details")
    print("")
    while True:
        name = input("Enter user name: ")
        address = input("Enter address: ")
        wardnumber=input("Enter ward number:")
        type=input("Enter the type of complaint:")
        print("")
        add_complaint = open("complaint Details.txt", "a")
        record = name + " " + address + " " + wardnumber + " " + type
        add_complaint.write(record)
        add_complaint.write("\n")
        add_complaint.close()
        test = int(input("Press 1 to continue add complaints or Press 0 to exit: "))
        if test == 1:
            print("")
            continue
        else:
            break
    menu()


def delete_complaint():
    file1 = open("complaint Details.txt", "r")
    tempfile = open("Del comp Det.txt", "w")
    delcomp = input("Enter user name to delete complaint: ")
    s = ' '
    while s:
        s = file1.readline()
        L = s.split(" ")
        if len(s) > 0:
            if L[0] != delcomp:
                tempfile.write(s)
    tempfile.close()
    file1.close()
    os.remove("complaint Details.txt")
    os.rename("Del comp Det.txt", "complaint Details.txt")
    test = int(input("Press 1 to continue delete complaint  or Press 0 to exit: "))
    if test == 1:
        delete_complaint()
    else:
        menu()


def update_complaint():
    string1 = input("Enter complaint to update:")
    file1 = open("complaint Details.txt", "r")
    flag = 0
    index = 0
    for line in file1:
        index += 1
        if string1 in line:
            lt = line.split(" ")
            if string1 == lt[0]:
                flag = 1
                break
    if flag == 0:
        print('complaint', string1, 'Not Found')
    else:
        print('complaint', string1, 'Found In Line', index)
        with open("complaint Details.txt") as f:
            lines = f.readlines()
            str1 = lines[index - 1]
            lines.remove(str1)
            lst1 = str1.split(" ")
            print("Select Action to Modify the complaint Details: ")
            print("1. Modify  user name ")
            print("2. Modify address")
            print("3. Modify ward number")
            print("4. Modify type of complaint ")
            ch1 = int(input("Enter your choice: "))
            if ch1 == 1:
                pr = input("Enter the new user name: ")
                lst1[0] = pr
            if ch1 == 2:
                qt = input("Enter the new address: ")
                lst1[1] = qt
            if ch1 == 3:
                mfg = input("Enter the new ward number ")
                lst1[2] = mfg
            if ch1 == 4:
                exp = input("Enter the new type of complaint: ")
                lst1[3] = exp
            strg = " ".join(lst1)
            lines.append(strg)
            udate_complaint = open("complaint Details.txt", "w")
            udate_complaint.truncate(0)
            for item in lines:
                udate_complaint.write(item)
            udate_complaint.close()
    file1.close()
    test = int(input("Press 1 to continue modify/update complaint or Press 0 to exit: "))
    if test == 1:
        update_complaint()
    else:
        menu()


def search_complaint():
    string1 = input("Enter complaint to search:")
    file1 = open("complaint Details.txt", "r")
    flag = 0
    index = 0
    for line in file1:
        index += 1
        if string1 in line:
            flag = 1
            break
    if flag == 0:
        print('complaint', string1, 'Not Found')
    else:
        print('complaint', string1, 'Found In Line', index)
        with open("complaint Details.txt") as f:
            lines = f.readlines()
            str1 = lines[index - 1]
            lst1 = str1.split(" ")
            print("user name: " + lst1[0] + " | address: " + lst1[1] + " | ward number: " + lst1[
                2] + " | type of complaint: " + lst1[3])
    file1.close()
    test = int(input("Press 1 to continue search complaint  or Press 0 to exit: "))
    if test == 1:
        search_complaint()
    else:
        menu()


def search_by_index_complaint():
    try:
        key = int(input("Enter the record number to retrieve: "))  # 1-n
        if key <= 0:
            print("Record not Found")
        else:
            with open("complaint Details.txt") as f:
                lines = f.readlines()
                keyRecord = lines[key - 1]
                lst = keyRecord.split(" ")
                print("user name: " + lst[0] + " | address: " + lst[1] + " | ward number: " + lst[
                    2] + " | type of complaint: " + lst[3])
            f.close()
    except:
        print("Record not found ")
    finally:
        test = int(input("Press 1 to continue search complaint by index or Press 0 to exit: "))
        if test == 1:
            search_by_index_complaint()
        else:
            menu()


def view_all_complaint():
    with open("complaint Details.txt") as f:
        lines = f.readlines()
        for line in lines:
            lst1 = line.split(" ")
            print("user name: " + lst1[0] + " | address: " + lst1[1] + " | ward number: " + lst1[
                2] + " | type of complaint: " + lst1[3])
    f.close()
    menu()



def reg_contractor():
    print("=" * 70)
    print("Register new contractor")
    print("=" * 70)
    print("Enter new contractor details")
    while True:
        id = input("Enter ID: ")
        name = input("Enter name: ")
        age = input("Enter age: ")
        c_username = input("Enter contractor username: ")
        c_password = input("Enter contractor password: ")
        qualification = input("Enter qualification: ")
        phno = input("Enter Phone No:")
        contractor_details = open("contractor Details.txt", "a")
        contractor_details.writelines(
            [id + " ", name + " ", age + " ", c_username + " ", c_password + " ", qualification + " ", phno + "\n"])
        contractor_details.close()
        test = int(input("Press 1 to continue or 0 to exit: "))
        if test == 1:
            continue
        else:
            break
    menu()


def delete_contractor():
    file1 = open("contractor Details.txt", "r")
    tempfile = open("Del cont Det.txt", "w")
    delcont = input("Enter contractor  id to delete: ")
    s = ' '
    while s:
        s = file1.readline()
        L = s.split(" ")
        if len(s) > 0:
            if L[0] != delcont:
                tempfile.write(s)
    tempfile.close()
    file1.close()
    os.remove("contractor Details.txt")
    os.rename("Del cont Det.txt", "contractor Details.txt")
    test = int(input("Press 1 to continue delete contractor  or Press 0 to exit: "))
    if test == 1:
        delete_contractor()
    else:
        menu()


def log_out():
    exit(0)


login()