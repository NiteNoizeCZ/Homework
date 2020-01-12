
package komunikace;

/**
 *
 * @author Jakub Čapek
 */
public class Komunikace {

    public static void main(String[] args) {
        //Zde jsem si vytvořil instanci se jménem "a".
        Ethernet a = new Ethernet(2, 30);
        
        /*
            zde jsem požádal o velikost instance "a" s výsledkem převedeném na MB.
            Následně jsem požádal o dobu trvání přenosu souboru.
            vše jsem následně vypsal pomocí "Syste......);".
        */
        System.out.print(a.getsize("MB"));
        System.out.println(a.gettime());
        
        // zde s výsledkem v kB.
        System.out.print(a.getsize("kB"));
        System.out.println(a.gettime());
        
        // zde s výsledkem v b.
        System.out.print(a.getsize("b"));
        System.out.println(a.gettime());
        
        // zde s výsledkem v Mb.
        System.out.print(a.getsize("Mb"));
        System.out.println(a.gettime());
        
        // zde s výsledkem v B.
        System.out.print(a.getsize("B"));
        System.out.println(a.gettime());
        
        //zde se výsledek převede na defaultní jednotku. [b]
        System.out.print(a.getsize(""));
        System.out.println(a.gettime());
    }
    
}
