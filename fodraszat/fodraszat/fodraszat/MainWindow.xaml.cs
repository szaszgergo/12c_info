using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.IO;
using System.Collections.Generic;
using System;

namespace fodraszat
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            tbx_datum.Text = DateTime.Now.ToString("yyyy.MM.dd");
            string[] sorok = File.ReadAllLines("fodraszok.txt");
            lbx_fodrasz.Items.Clear();
            foreach (var sor in sorok)
            {
                lbx_fodrasz.Items.Add(sor);
            }
            string[] sorok2 = File.ReadAllLines("elojegyzesek.txt");
            lbx_elojegyzesek.Items.Clear();
            foreach (var sor2 in sorok2)
            {
                if (!string.IsNullOrWhiteSpace(sor2))
                {
                    lbx_elojegyzesek.Items.Add(sor2);
                }
            }

        }


        private void btn_ment_Click(object sender, RoutedEventArgs e)
        {
            if (string.IsNullOrWhiteSpace(tbx_datum.Text) || string.IsNullOrWhiteSpace(tbx_nev.Text) || string.IsNullOrWhiteSpace(tbx_telefon.Text) || lbx_fodrasz.SelectedItem == null)
            {
                MessageBox.Show("Mentéshez szükséges adatok: dátum, név, telefonszám, fodrász kiválasztása!");
            }
            else
            {
                string fodrasz = lbx_fodrasz.SelectedItem.ToString();
                string elojegyzes_uj = $"{tbx_datum.Text} {ora.Text}:{perc.Text} {tbx_nev.Text} {tbx_telefon.Text} {fodrasz}";
                lbx_elojegyzesek.Items.Add(elojegyzes_uj);

                using (StreamWriter elojegyzes = new StreamWriter("elojegyzesek.txt", true))
                {
                    elojegyzes.WriteLine(elojegyzes_uj);
                }

                using (StreamWriter naplo = new StreamWriter("naplo.txt", true))
                {  
                    naplo.WriteLine($"{DateTime.Now.ToString("yyyy.MM.dd HH:mm:ss")} / Mentés: {elojegyzes_uj}");
                }
            }

           

        }

        ////


        private void btn_torles_Click(object sender, RoutedEventArgs e)
        {
            if (lbx_elojegyzesek.SelectedItems.Count > 0)
            {
                string selected = lbx_elojegyzesek.SelectedItem.ToString();

                List<string> lines = new List<string>(File.ReadAllLines("elojegyzesek.txt"));

                lines.Remove(selected);

                File.WriteAllLines("elojegyzesek.txt", lines);

                lbx_elojegyzesek.Items.Remove(selected);

                using (StreamWriter naplo = new StreamWriter("naplo.txt", true))
                {
                    naplo.WriteLine($"{DateTime.Now.ToString("yyyy.MM.dd HH:mm:ss")} / Törlés:{selected}");
                }
            }

          
        }

        //



        private void btn_keres_Click(object sender, RoutedEventArgs e)
        {
            if (!string.IsNullOrWhiteSpace(tbx_telefon.Text))
            {
                string telsearch = tbx_telefon.Text;
                string[] lines = File.ReadAllLines("elojegyzesek.txt");

                var ujsorok = new List<string>();
                foreach (var line in lines)
                {

                    string[] sorelemek = line.Split(' ');
                    foreach (var sorelem in sorelemek)
                    {
                        if (sorelem.Contains(telsearch))
                        {
                            ujsorok.Add(line);
                            break; // Ha találunk egyezést, megszakítjuk a belső ciklust
                        }
                    }
                }

                lbx_elojegyzesek.Items.Clear();

                foreach (var szurtsor in ujsorok)
                {
                    lbx_elojegyzesek.Items.Add(szurtsor);
                }
            }
            else
            {
                if (string.IsNullOrWhiteSpace(tbx_datum.Text) || string.IsNullOrWhiteSpace(ora.Text) || string.IsNullOrWhiteSpace(perc.Text) || lbx_fodrasz.SelectedItem == null)
                {
                    MessageBox.Show("A kereséshez adja meg a dátumot, az időpontot és válasszon fodrászt!");
                    return;
                }

                string search_date = tbx_datum.Text;
                string search_hr = lbx_fodrasz.SelectedItem.ToString();
                string search_time = $"{ora.Text}:{perc.Text}";

                string[] lines = File.ReadAllLines("elojegyzesek.txt");

                var ujsorok = new List<string>();

                foreach (var line in lines)
                {
                    if (line.Contains(search_date) && line.Contains(search_time) && line.Contains(search_hr))
                    {
                        ujsorok.Add(line);
                    }
                }

                lbx_elojegyzesek.Items.Clear();

                foreach (var szurtsor in ujsorok)
                {
                    lbx_elojegyzesek.Items.Add(szurtsor);
                }
            }
        }

        private void btn_vissza_Click(object sender, RoutedEventArgs e)
        {
            string[] sorok2 = File.ReadAllLines("elojegyzesek.txt");
            lbx_elojegyzesek.Items.Clear();
            foreach (var sor2 in sorok2)
            {
                if (!string.IsNullOrWhiteSpace(sor2))
                {
                    lbx_elojegyzesek.Items.Add(sor2);
                }
            }
        }

        //


    }
}