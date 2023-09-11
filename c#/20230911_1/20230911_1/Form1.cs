using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Diagnostics;
using System.Reflection.Emit;

namespace _20230911_1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private bool isLowerCase = false;
        private bool isUpperCase = false;

        private string originalLabelText;
        private void Form1_Load(object sender, EventArgs e)
        {
            originalLabelText = lbl_hazi.Text;
        }

        private void button5_Click(object sender, EventArgs e)
        {

        }

        private void btn_Kilep_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Ki szeretnél lépni?","Kilépés", MessageBoxButtons.YesNo,MessageBoxIcon.Question) == DialogResult.Yes)
            {
                this.Close();
            }
            else
            {

            }
            
        }

        private void btn_kek_Click(object sender, EventArgs e)
        {
            Color color = Color.FromArgb(45, 39, 226);
            lbl_hazi.ForeColor = color;


        }

        private void btn_Fekete_Click(object sender, EventArgs e)
        {
            Color color = Color.FromArgb(0, 0, 0);
            lbl_hazi.ForeColor = color;
        }

        private void btn_Kozepre_Click(object sender, EventArgs e)
        {
            int newX = 135;
            int newY = 20;
            lbl_hazi.Location = new Point(newX, newY);
        }

        private void lbl_hazi_Click(object sender, EventArgs e)
        {

        }

        private void btn_nagybetus_Click(object sender, EventArgs e)
        {
            string txt1 = lbl_hazi.Text;
            lbl_hazi.Text = txt1.ToUpper();


                  if (isUpperCase)
            {
                lbl_hazi.Text = originalLabelText;
                isUpperCase = false;
            }
            else
            {
                lbl_hazi.Text = lbl_hazi.Text.ToUpper();
                isUpperCase = true;
            }
        }

        private void btn_Kisbetus_Click(object sender, EventArgs e)
        {
            string txt1 = lbl_hazi.Text;
            lbl_hazi.Text = txt1.ToLower();

            if (isLowerCase)
            {
                lbl_hazi.Text = originalLabelText;
                isLowerCase = false;
            }
            else
            {
                lbl_hazi.Text = lbl_hazi.Text.ToLower();
                isLowerCase = true;
            }

        }

        private void btn_Torol_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Ki szeretnéd törölni?", "Törlés", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                lbl_hazi.Text = "";
            }
            else
            {

            }
        }

        private void btn_kiir_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Házi feladat ", "Kiíratás");
        }

        private void btn_Balra_Click(object sender, EventArgs e)
        {
            // Define new X and Y coordinates for the label's position
            int newX = 0; // Replace with your desired X-coordinate
            int newY = 20; // Replace with your desired Y-coordinate

            // Update the label's position
            lbl_hazi.Location = new Point(newX, newY);
        }

        private void btn_Jobbra_Click(object sender, EventArgs e)
        {
         
            int newX = 230;
            int newY = 20;
            lbl_hazi.Location = new Point(newX, newY);
        }
    }
}
