#include <iostream>
#include <string.h>

using namespace std;

int main()
{
    int panjang = 0;
    bool anagram = false;
    string salinan, newsalinan;
    char kalimat[20], pembanding[20];

    cout <<"Kalimat : ";
    cin.getline(kalimat, sizeof(kalimat));

    cout <<"Pembanding : ";
    cin.getline(pembanding, sizeof(pembanding));   

    if(strlen(kalimat) > strlen(pembanding)){
        panjang += strlen(kalimat);
    }
    else{
        panjang += strlen(pembanding);
    }

    for(int i=0; i<panjang; i++)
    {
        for(int h=panjang-1; h>=0; h--) 
        {
            if(kalimat[h] < kalimat[h-1])
            {
                char tmp = kalimat[h];
                kalimat[h] = kalimat[h-1];  
                kalimat[h-1] = tmp;
            }

        }
    }

    for(int i=0; i<panjang; i++)
    {
        for(int h=panjang-1; h>=0; h--)
        {
            if(pembanding[h] < pembanding[h-1])            
            {
                char tmp = pembanding[h];
                pembanding[h] = pembanding[h-1];    
                pembanding[h-1] = tmp;
            }

        }
    }

    salinan.assign(kalimat);
    newsalinan.assign(pembanding);

    if(salinan == newsalinan)
    {
        anagram = true;
    }

    if(anagram){
        cout<<"true"<<endl;
    }
    else{
        cout<<"false"<<endl;
    }

    return 0;
}
