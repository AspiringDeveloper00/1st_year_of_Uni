package Anthony.ContactList;
import java.io.Serializable;
import java.util.Scanner;

/*Extends main so i can access the ContactList*/
public class Contact extends Main implements Serializable {
    String Name;
    String PhoneNumber;
    String Email;
    String Address;



    public static void ShowAllContacts() {
        for (Contact con : ContactList) {
            System.out.println("Name:"+con.Name+" | PhoneNumber:"+con.PhoneNumber+" | Email:"+con.Email+" | Address:"+con.Address );
        }
    }


    public static void AddContact(String Name, String PhoneNumber, String Email, String Address) {
        Contact c=new Contact();
        c.Name=Name;
        c.PhoneNumber=PhoneNumber;
        c.Email=Email;
        c.Address=Address;
        ContactList.add(c);
    }


    public static void SearchByName(String Name) {
        boolean flag=false;
        for(Contact con:ContactList){
            if (con.Name.equals(Name)){
                flag=true;
                System.out.println("Name:"+con.Name+" | PhoneNumber:"+con.PhoneNumber+" | Email:"+con.Email+" | Address:"+con.Address );
            }
        }
        if (!flag){
            System.out.println("The contact with the name "+Name+" was not found!");
        }
    }


    public static void SearchByPhoneNumber(String PhoneNumber) {
        boolean flag=false;
        Contact c=new Contact();
        for(Contact con:ContactList){
            if (con.PhoneNumber.equals(PhoneNumber)){
                flag=true;
                c=con;
                break;
            }
        }
        if (flag){
            System.out.println("Contact found!");
            System.out.println("Name:"+c.Name+" | PhoneNumber:"+c.PhoneNumber+" | Email:"+c.Email+" | Address:"+c.Address );
        }else{
            System.out.println("The contact with the phone number "+PhoneNumber+" was not found!");
        }
    }


    public static void EditByName(String Name) {
        boolean flag=false;
        int times=0;
        Contact c=new Contact();
        for(Contact con:ContactList){
            if (con.Name.equals(Name)){
                flag=true;
                c=con;
                times+=1;
            }
        }
        if (times==1) {
            if (flag) {
                char quit = 'n';
                int choice;
                String choice1;
                Scanner scan = new Scanner(System.in);
                System.out.println("Name:" + c.Name + " | PhoneNumber:" + c.PhoneNumber + " | Email:" + c.Email + " | Address:" + c.Address);
                EditMenu();

                while (quit != 'y') {
                    while (true) {
                        choice1 = scan.next();
                        try {
                            choice = Integer.parseInt(choice1);
                            System.out.println("Correct input!");
                            break;
                        } catch (NumberFormatException e) {
                            System.out.println("You have to give a number between 1 and 5.Try again!");
                        }
                    }
                    switch (choice) {
                        case 1:
                            String name;
                            System.out.println("Current name:" + c.Name);
                            System.out.println("Give a new name.");
                            name = scan.next();
                            c.Name = name;
                            break;
                        case 2:
                            String phonenumber;
                            System.out.println("Current phone number:" + c.PhoneNumber);
                            System.out.println("Give a new phone number.");
                            phonenumber = scan.next();
                            c.PhoneNumber = phonenumber;
                            break;
                        case 3:
                            String mail;
                            System.out.println("Current emal:" + c.Email);
                            System.out.println("Give a new email address.");
                            mail = scan.next();
                            c.Email = mail;
                            break;
                        case 4:
                            String address;
                            System.out.println("Current address:" + c.Address);
                            System.out.println("Give a new home address.");
                            address = scan.next();
                            c.Address = address;
                            break;
                        case 5:
                            quit = 'y';
                            break;
                        default:
                            System.out.println("You entered an invalid input,please choose an number between 1 and 5 as the menu orders.");
                            break;
                    }
                    System.out.println("Choose another field to edit or finish editing by pressing 5.");
                }
            } else {
                System.out.println("The contact with the name " + Name + " was not found!");
            }
        }else{
                System.out.println("There are more than 1 contacts with the name "+Name+".");
                System.out.println("Choose the number of the contact you want to edit!");
                for(Contact con:ContactList) {
                    if (con.Name.equals(Name)) {
                        System.out.println("Name:" + con.Name + " | PhoneNumber:" + con.PhoneNumber + " | Email:" + con.Email + " | Address:" + con.Address);
                    }
                }
                Scanner scan=new Scanner(System.in);
                String phone=scan.next();
                boolean flag1=false;
                Contact c1=new Contact();
                for(Contact co:ContactList){
                    if (co.PhoneNumber.equals(phone)){
                        flag1=true;
                        c1=co;
                        break;
                    }
                }
                if (flag1) {
                    char quit = 'n';
                    int choice;
                    String choice1;
                    scan = new Scanner(System.in);
                    System.out.println("Name:" + c1.Name + " | PhoneNumber:" + c1.PhoneNumber + " | Email:" + c1.Email + " | Address:" + c1.Address);
                    EditMenu();

                    while (quit != 'y') {
                        while (true) {
                            choice1 = scan.next();
                            try {
                                choice = Integer.parseInt(choice1);
                                System.out.println("Correct input!");
                                break;
                            } catch (NumberFormatException e) {
                                System.out.println("You have to give a number between 1 and 5.Try again!");
                            }
                        }
                        switch (choice) {
                            case 1:
                                String name;
                                System.out.println("Current name:" + c1.Name);
                                System.out.println("Give a new name.");
                                name = scan.next();
                                c1.Name = name;
                                break;
                            case 2:
                                String phonenumber;
                                System.out.println("Current phone number:" + c1.PhoneNumber);
                                System.out.println("Give a new phone number.");
                                phonenumber = scan.next();
                                c1.PhoneNumber = phonenumber;
                                break;
                            case 3:
                                String mail;
                                System.out.println("Current emal:" + c1.Email);
                                System.out.println("Give a new email address.");
                                mail = scan.next();
                                c1.Email = mail;
                                break;
                            case 4:
                                String address;
                                System.out.println("Current address:" + c1.Address);
                                System.out.println("Give a new home address.");
                                address = scan.next();
                                c1.Address = address;
                                break;
                            case 5:
                                quit = 'y';
                                break;
                            default:
                                System.out.println("You entered an invalid input,please choose an number between 1 and 5 as the menu orders.");
                                break;
                        }
                        System.out.println("Choose another field to edit or finish editing by pressing 5.");
                    }
                }else{
                        System.out.println("The phone number "+phone+" was not found!");
                    }
                }

    }

    public static void EditMenu(){
        System.out.println("Choose a field to edit,by entering the appropriate number.");
        System.out.println("1)Edit name.");
        System.out.println("2)Edit phone number.");
        System.out.println("3)Edit email address.");
        System.out.println("4)Edit home address.");
        System.out.println("5)Stop editing contact.");
    }

    public static void DeleleByName(String Name) {
        boolean flag=false;
        int times=0;
        Contact c=new Contact();
        for(Contact con:ContactList){
            if (con.Name.equals(Name)){
                flag=true;
                c=con;
                times+=1;
            }
        }
        if (times==1) {
            if (flag) {
                System.out.println("Contact found!");
                ContactList.remove(c);
                System.out.println("Contact deleted!");
            } else {
                System.out.println("The contact with the name " + Name + " was not found!");
            }
        }else{
            System.out.println("There are more than 1 contacts with the name "+Name+".");
            System.out.println("Choose the number of the contact you want to delete!");
            for(Contact con:ContactList) {
                if (con.Name.equals(Name)) {
                    System.out.println("Name:" + con.Name + " | PhoneNumber:" + con.PhoneNumber + " | Email:" + con.Email + " | Address:" + con.Address);
                }
            }
            Scanner scan=new Scanner(System.in);
            String phone=scan.next();
            boolean flag1=false;
            Contact c1=new Contact();
            for(Contact co:ContactList){
                if (co.PhoneNumber.equals(phone)){
                    flag1=true;
                    c1=co;
                    break;
                }
            }
            if (flag1) {
                ContactList.remove(c1);
            }else{
                System.out.println("The phone number "+phone+" was not found!");
            }
        }
    }
}
