#include <iostream>

using namespace std;

int main()
{
    int i;
    int bilangan;
    string kata;

    cout<<"Masukkan bilangan : ";
    cin>>bilangan;

    for (i=1; i<=bilangan; i++)
    {
        if(i % 6 == 0)
        {
            kata = "DIGITAL OASIS";
        }else if(i % 3 == 0){
            kata = "OS";
        }else if(i % 2 == 0){
            kata = "DI";
        }else{
            kata = "";
        }

        cout<<i<<kata<<endl;
    }

    return 0;
}
