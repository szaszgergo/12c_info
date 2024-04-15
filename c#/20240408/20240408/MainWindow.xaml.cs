using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace _20240408
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            // bar(100,50);
            emberek(100,100);
        }
        /*
        public void bar(double x, double y)
        {
            //epulet
            double teto= 100;
            Rectangle bar1 = new Rectangle();
            bar1.Width = 800;
            bar1.Height = 300;
            bar1.Stroke =Brushes.Brown;
            bar1.StrokeThickness = 2;
            bar1.Fill = Brushes.WhiteSmoke;
            bar1.SetValue(Canvas.LeftProperty, x);
            bar1.SetValue(Canvas.TopProperty, y+teto );
            cv_bar.Children.Add(bar1);
            //pult
            Rectangle pult = new Rectangle();
             y = 12;
            pult.Width = 500;
            pult.Height = 150;
            pult.Stroke = Brushes.Brown;
            pult.StrokeThickness = 2;
            pult.Fill = Brushes.WhiteSmoke;
            pult.SetValue(Canvas.LeftProperty, x);
            pult.SetValue(Canvas.BottomProperty,y);
            cv_bar.Children.Add(pult);
            //szekek teteje/alja/rudja
            Ellipse uloke = new Ellipse();
            uloke.Width = 60;
            uloke.Height = 25;
            uloke.Stroke = Brushes.Black;
            uloke.StrokeThickness = 1;
            uloke.Fill = Brushes.Pink;
            uloke.SetValue(Canvas.LeftProperty, x + 370);
            uloke.SetValue(Canvas.TopProperty, y + 343);
            cv_bar.Children.Add(uloke);

            Line rudja = new Line();
            rudja.X1 = 400;
            rudja.Y1 = 300;
            rudja.X2 = 400;
            rudja.Y2 = 370;
            SolidColorBrush Brush = new SolidColorBrush();
            Brush.Color = Colors.Brown;
            rudja.StrokeThickness = 3;
            rudja.Stroke = Brush;
            rudja.SetValue(Canvas.LeftProperty, x);
            rudja.SetValue(Canvas.BottomProperty, y);
            cv_bar.Children.Add(rudja);


            Line alja = new Line();
            alja.X1 = 380;
            alja.Y1 = 90;
            alja.X2 = 420;
            alja.Y2 = 90;
            Brush.Color = Colors.Red;
            alja.StrokeThickness = 3;
            alja.Stroke = Brush;
            alja.SetValue(Canvas.LeftProperty, x);
            alja.SetValue(Canvas.BottomProperty, y);
            cv_bar.Children.Add(alja);


            //italok  
            //   
            Polygon italok = new Polygon();
            italok.Stroke = System.Windows.Media.Brushes.Black;
            italok.Fill = System.Windows.Media.Brushes.Green;
            italok.StrokeThickness = 2;
            italok.HorizontalAlignment = HorizontalAlignment.Left;
            italok.VerticalAlignment = VerticalAlignment.Center;
            System.Windows.Point Point1 = new System.Windows.Point(20, 0);
            System.Windows.Point Point2 = new System.Windows.Point(40, 0);
            System.Windows.Point Point3 = new System.Windows.Point(40, 10);
            System.Windows.Point Point4 = new System.Windows.Point(45, 20);
            System.Windows.Point Point5 = new System.Windows.Point(50, 25);
            System.Windows.Point Point6 = new System.Windows.Point(50, 60);
            System.Windows.Point Point7 = new System.Windows.Point(10, 60);
            System.Windows.Point Point8 = new System.Windows.Point(10, 25);
            System.Windows.Point Point9 = new System.Windows.Point(15, 20);
            System.Windows.Point Point10 = new System.Windows.Point(20, 10);
            System.Windows.Point Point11 = new System.Windows.Point(20, 0);


            PointCollection myPointCollection = new PointCollection();
            myPointCollection.Add(Point1);
            myPointCollection.Add(Point2);
            myPointCollection.Add(Point3);
            myPointCollection.Add(Point4);
            myPointCollection.Add(Point5);
            myPointCollection.Add(Point6);
            myPointCollection.Add(Point7);
            myPointCollection.Add(Point8);
            myPointCollection.Add(Point9);
            myPointCollection.Add(Point10);
            myPointCollection.Add(Point11);
            italok.Points = myPointCollection;
            cv_bar.Children.Add(italok);

            //pultos
            //vevo
            //tabla
        }
        */
        public void emberek(double x,double y)
        {
            //keze labba feje torso
            Random rnd = new Random();
            int valami = rnd.Next(3, 10);
            Dictionary<int,string> szinek = new Dictionary<int,string>();
            szinek.Add(0,"Brown");
            szinek.Add(1,"Green");
            szinek.Add(2,"Black");
            szinek.Add(3,"LightBlue");
            int valami2 = rnd.Next(0, 3);
            int valami3 = rnd.Next(0, 3);


            for (int i = 0; i < valami; i++)
            {
                //if feltétel ha egyik ember van egy adott x poz_on akkor annak 30-30 pixel távolságban ne legyen más VAGY
                //legyen kiindulo x_poz az elsőnek és utána adott n elemu x pixellel legyen arréb a kövi ember
            
                
                //torso
                Rectangle test = new Rectangle();
                test.RadiusX = 10;
                test.RadiusY = 10;
                test.Width = 30;
                test.Height = 60;
                test.Stroke = Brushes.Black;
                test.StrokeThickness = 2;
                string szinNeve = szinek[valami2];
                Color szin = (Color)ColorConverter.ConvertFromString(szinNeve);
                SolidColorBrush szin_fill = new SolidColorBrush(szin);
                test.Fill = szin_fill;
                double test_poz_x = x + rnd.Next(5, 500);
                test.SetValue(Canvas.LeftProperty, test_poz_x);
                double test_poz_y = y + 240;

                test.SetValue(Canvas.TopProperty, test_poz_y);
                cv_bar.Children.Add(test);

                //fej
                Ellipse fej = new Ellipse();
                fej.Width = 30;
                fej.Height = 35;
                fej.Stroke = Brushes.Black;
                fej.StrokeThickness = 1;
                fej.Fill = Brushes.WhiteSmoke;
                fej.SetValue(Canvas.LeftProperty, test_poz_x);
                fej.SetValue(Canvas.TopProperty, test_poz_y-32);
                cv_bar.Children.Add(fej);

                //végtagok: kar1/kar2 lab1/lab2

                //lab1
                Rectangle lab1 = new Rectangle();
                lab1.RadiusX = 10;
                lab1.RadiusY = 10;
                lab1.Width = 15;
                lab1.Height = 80;
                lab1.Stroke = Brushes.Black;
                lab1.StrokeThickness = 2;
                lab1.Fill = szin_fill;
                lab1.SetValue(Canvas.LeftProperty, test_poz_x + 20);
                lab1.SetValue(Canvas.TopProperty, test_poz_y+50);
                cv_bar.Children.Add(lab1);

                //lab2

                Rectangle lab2 = new Rectangle();
                lab2.RadiusX = 10;
                lab2.RadiusY = 10;
                lab2.Width = 15;
                lab2.Height = 80;
                lab2.Stroke = Brushes.Black;
                lab2.StrokeThickness = 2;
                lab2.Fill = szin_fill;
                lab2.SetValue(Canvas.LeftProperty, test_poz_x -5);
                lab2.SetValue(Canvas.TopProperty, test_poz_y + 50);
                cv_bar.Children.Add(lab2);

                //kar1 és kar2
                Rectangle kar1 = new Rectangle();
                Rectangle kar2 = new Rectangle();


                kar1.RadiusX = 10;
                kar1.RadiusY = 10;
                kar1.Width = 15;
                kar1.Height = 60;
                kar1.Stroke = Brushes.Black;
                kar1.StrokeThickness = 2;
                kar1.Fill = szin_fill;
                kar1.SetValue(Canvas.LeftProperty, test_poz_x -10);
                kar1.SetValue(Canvas.TopProperty, test_poz_y );
                cv_bar.Children.Add(kar1);



                kar2.RadiusX = 10;
                kar2.RadiusY = 10;
                kar2.Width = 15;
                kar2.Height = 60;
                kar2.Stroke = Brushes.Black;
                kar2.StrokeThickness = 2;
                kar2.Fill = szin_fill;
                kar2.SetValue(Canvas.LeftProperty, test_poz_x +25);
                kar2.SetValue(Canvas.TopProperty, test_poz_y );
                cv_bar.Children.Add(kar2);
            }
        }
    }
}
