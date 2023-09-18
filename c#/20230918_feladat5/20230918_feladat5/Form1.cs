using System;
using System.Windows.Forms;
using System.Collections.Generic;

namespace _20230918_feladat5
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            listBox1.SelectionMode = SelectionMode.MultiSimple;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string Kereset_szoveg = textBox1.Text.ToLower();

            // Ideiglenes lista az új eredmények tárolásához
            List<string> ujElemek = new List<string>();

            foreach (string item in listBox1.Items)
            {
                if (item.ToLower().Contains(Kereset_szoveg))
                {
                    ujElemek.Add(item);
                }
            }

            // Töröljük a korábbi kiválasztásokat
            listBox1.ClearSelected();

            // Másoljuk az új eredményeket a SelectedItems listába
            foreach (string ujElem in ujElemek)
            {
                int index = listBox1.Items.IndexOf(ujElem);
                if (index >= 0)
                {
                    listBox1.SetSelected(index, true);
                }
            }
        }
    }
}
