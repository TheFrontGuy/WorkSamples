#include <iostream>
#include <iomanip>
#include <algorithm>
#include <vector>
#include <string>
#include <cmath>

void randNum(std::vector<std::string> &ship);

void randNum(std::vector<std::string> &ship) {
    int randomNumber {};
    
    size_t count{1}; //number of random numbers to generate
    int min {0}; //lower bound (inclusive)
    int max {21}; //upper bound (inclusive)
    
    //seed the random number generator
    //if you don't seed the generator you will get the same requence random numbers every run
    
    srand(time(nullptr));
    
    for (size_t i{1}; i <= count; ++i) {
        randomNumber = rand() % max + min; //generate a random number [min, max]
        std::cout << "\nYou are now to play the " << ship[randomNumber] << std::endl;
    }
}

int main() {
    
    std::vector<std::string> ship {"SHIMAKAZE", "HARUGUMO", "ZAO", "YAMATO", "GEARING", "DES MOINES", "WORCESTER", "SALEM", "MONTANA", "MIDWAY", "KHABAROVSK", 
                                "GROZOVOI", "MOSKVA", "STALINGRAD", "KREMLIN", "HINDENBURG", "GROSSER KURFURST", "MINOTAUR", "CONQUEROR", "YUEYANG", "HENRI IV", "REPUBLIQUE"};
    char selection {};
    
    do {
        
        //Menu items
        std::cout << "\n------------------------------------" << std::endl;
        std::cout << "P- Pick Ship" << std::endl;
        std::cout << "Q- Quit" << std::endl;
        std::cout << "\nEnter your selction: ";
        std::cin >> selection;
        
        if (selection == 'p' || selection == 'P') {
            
            randNum(ship);
        }
        
    } while (selection != 'q' && selection != 'Q');
    
    return 0;
}





