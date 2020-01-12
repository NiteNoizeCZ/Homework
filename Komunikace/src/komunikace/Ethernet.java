package komunikace;


public class Ethernet {
    /*
    private konstanty size, speed, zapouzdřování a prevod jednotky.
    Obsahuje také public final PAKET, která lze nastavit v hlavním programu na menší velikost paketu.
    */
    private final double size;
    private final double speed;
    private final double zapouzdrovani = 66;
    public final int PAKET = 1500;
    private int prevod_jednotky;
    
    /*
    - konstruktor
    - Převod vstupu size a uložení do private konstanty size
    - vstup speed se uloží do private konstanty speed
    */
    
    Ethernet( double size, double speed ){
        this.size = size*prevod_jednotek("B");
        this.speed = speed;
    }
    
    //public metoda pro výpočet výsledné velikosti souboru po odeslání po síti.
    public String getsize(String vysledna_jednotka){
        jednotka(vysledna_jednotka);
        double pocet_paketu = size/PAKET;
        double vysledek = (size + (pocet_paketu * zapouzdrovani))/prevod_jednotek("B");
        vysledek = vysledek*prevod_jednotky;
        if(vysledna_jednotka == ""){
            return "Výsledná velikost souboru je " + vysledek + " " + "b \n";
        }else{
            return "Výsledná velikost souboru je " + vysledek + " " + vysledna_jednotka + "\n";
        }
}
    
    //public metoda pro výpočet rychlosti přenosu onoho souboru.
    public String gettime(){
        double pocet_paketu = size/PAKET;
        double vysledek = ((zapouzdrovani+PAKET) * pocet_paketu)/prevod_jednotek("B");
        vysledek = vysledek*prevod_jednotek("Mb");
        vysledek = vysledek/speed;
        return "Rychlost přenosu paketu je " + vysledek + " " + "sekund\n";
    }
    
    
    //private metody pro výpočty provedené v programu.
    
    //metoda "jednotka" slouží k převedení výsledku na zadanou jednotku ve vstupu v metodě getsize.
    private void jednotka( String jednotka ){
        switch(jednotka){
            case "MB":
                this.prevod_jednotky = 1;
                break;
            case "kB":
                this.prevod_jednotky = 1024;
                break;
            case "b":
                this.prevod_jednotky = 8388608;
                break;
            case "Mb":
                this.prevod_jednotky = 8;
                break;
            case "B":
                this.prevod_jednotky = 1048576;
                break;
            case "":
                this.prevod_jednotky = 8388608;
                break;
                
        }
    }
    /*
        Metoda prevod_jednotek slouží k převodům na zadané jednotky v datového typu String.
        Využito v konstruktoru, metodě getsize a gettime.
    */
    private int prevod_jednotek(String jednotka){
        switch(jednotka){
            case "MB":
                return 1;
            case "kB":
                return 1024;
            case "b":
                return 8388608;
            case "Mb":
                return 8;

            case "B":
                return 1048576;

            case "":
                return 0;   
        }
                return 0;   
    }
}
