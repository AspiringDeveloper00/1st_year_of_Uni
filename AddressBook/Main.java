package Anthony.ContactList;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.Scanner;
import java.util.ArrayList;
import java.util.List;
import java.io.*;


public class Main implements Serializable {

    /*Initializing a list in order to load in it the data from the txt file*/
    static List<Contact> ContactList = new ArrayList<>();

    public static void main(String[] args) throws IOException {

        String file="contacts.txt";
        /*Checking if the file exists,if not i create it(first time running this program)*/
        checkIfFileExists(file);

        /*When the program starts running,I am loading the Arraylist of the contacts from the txt file.If the file is empty I do not read the file content because there is no point. */
        FileReader fr = new FileReader(file);
        if (fr.read() != -1) {
            ContactList = loadContactList(file);
        }


        /*Initializing choice-choice1 (use for valid input), making an instance of Scanner so the user can input his choice and setting the quit variable as n (not wanting to quit)*/
        char quit = 'n';
        String choice1;
        int choice;
        Scanner scan = new Scanner(System.in);

        /*Initializing 4 possible input variables*/
        String name,phonenumber,mail,address;

        System.out.println("Welcome to your private address book!");
        System.out.println("------------------------------------------------------------------------------");
        DisplayMenu();



        /*While quit='n' the program runs.When the user inputs the number 7, the quit variable is set to 'y' so the while loop ends (and the program also ends)*/
        while (quit!='y'){
            /* Checkinh if the input is an integer*/
            while(true) {
                choice1 = scan.next();
                try {
                    choice = Integer.parseInt(choice1);
                    break;
                } catch (NumberFormatException e) {
                    System.out.println("You have to give a number between 1 and 7.Try again!");
                }
            }

            switch(choice){
                case 1:
                    Contact.ShowAllContacts();
                    System.out.println("Select another option!");
                    break;
                case 2:
                    System.out.println("Please give a name.");
                    name=scan.next();
                    System.out.println("Please give a phone number.");
                    phonenumber=scan.next();
                    System.out.println("Please give an Email address.");
                    mail=scan.next();
                    System.out.println("Please give an address.");
                    address=scan.next();
                    Contact.AddContact(name,phonenumber,mail,address);
                    System.out.println("Select another option!");
                    break;
                case 3:
                    System.out.println("Enter a name to find it in the address book!");
                    name=scan.next();
                    Contact.SearchByName(name);
                    System.out.println("Select another option!");
                    break;
                case 4:
                    System.out.println("Enter a phone number to find it in the address book!");
                    phonenumber=scan.next();
                    Contact.SearchByPhoneNumber(phonenumber);
                    System.out.println("Select another option!");
                    break;
                case 5:
                    System.out.println("Please give a name.");
                    name=scan.next();
                    Contact.EditByName(name);
                    System.out.println("Select another option!");
                    break;
                case 6:
                    System.out.println("Enter a name to delete it from the address book!");
                    name=scan.next();
                    Contact.DeleleByName(name);
                    System.out.println("Select another option!");
                    break;
                case 7:
                    quit='y';
                    break;
                default:
                    System.out.println("You entered an invalid input,please choose an number between 1 and 7 as the menu orders.");
                    break;
            }
        }

        /*Before the program ends,I am saving the possibly changed Arraylist of contacts to the txt file*/
        saveContactList((ArrayList) ContactList,file);
        scan.close();
    }


    /*This method prints the central menu*/
    static void DisplayMenu() {
        System.out.println("Choose 1 of the following actions by pressing the appropriate number.");
        System.out.println("1)Show all contacts.");
        System.out.println("2)Add new contact.");
        System.out.println("3)Search a contact by name.");
        System.out.println("4)Search a contact by phone number.");
        System.out.println("5)Edit a contact that will be searched by name.");
        System.out.println("6)Delete a contact.");
        System.out.println("7)Exit Address book app.");
    }

    /*This method checks if the file exists.If it exists it does nothing.If it does not exist it creates it.*/
    static void checkIfFileExists(String filename) {
        if (Files.isRegularFile(Paths.get(filename))) {
        } else {
            File file = new File(filename);

            try {
                if (file.createNewFile()) {
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
    }

    /*This method deserializes the Arraylist which includes instances of the object Contact*/
    static ArrayList loadContactList (String filename) {
        ArrayList conlist = null;
        try {
            FileInputStream fis = new FileInputStream(filename);
            ObjectInputStream ois = new ObjectInputStream(fis);
            conlist = (ArrayList) ois.readObject();
            ois.close();
            fis.close();
        } catch (IOException | ClassNotFoundException e) {
            e.printStackTrace();
        }
        return conlist;
    }

    /*This method serializes the Arraylist which includes instances of the object Contact*/
    static void saveContactList (ArrayList conlist, String filename){
        try {
            FileOutputStream fos = new FileOutputStream(filename);
            ObjectOutputStream oos = new ObjectOutputStream(fos);
            oos.writeObject(conlist);
            oos.close();
            fos.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
        System.out.println("List saved saved!");
   }
}