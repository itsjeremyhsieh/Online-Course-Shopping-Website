using System;
using System.IO;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace _20220321
{
    public partial class Form1 : Form
    {
        int counter = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "C: \\Users\\user\\Downloads\\hello(*.csv)|*.csv";
            if(openFileDialog1.ShowDialog()==DialogResult.OK)
            {
                StreamReader sr = new StreamReader(openFileDialog1.FileName, Encoding.Default);
                string[] input = new string[4];
                string[] name = new string[100];
                int[] num = new int[100];
                double[,] coordinate = new double[100, 2];
                double x = Convert.ToDouble(textBox2.Text);
                double y = Convert.ToDouble(textBox3.Text);
                int i = 0;
                while (sr.Peek() >= 0)
                {
                    input = sr.ReadLine().Split(',');
                    name[i] = input[0];
                    num[i] = Convert.ToInt32(input[1]);
                    coordinate[i, 0] = Convert.ToDouble(input[2]);
                    coordinate[i, 1] = Convert.ToDouble(input[3]);
                    i++;
                }
                sr.Close();
                counter = i;
                textBox4.Text ="" + counter;
                int sum = 0;
                for(int k=0;k<i;k++)
                {
                    sum += num[k];
                }
                textBox5.Text = "" + sum;
                double distance = 0;
                for(int k=0;k<i;k++)
                {
                    distance += Math.Sqrt(Math.Pow(x - coordinate[k, 0], 2) + Math.Pow(y - coordinate[k, 1], 2));

                }
                textBox6.Text = "" + (distance/counter);
                textBox1.Text = "姓名\t需求量\tX座標\tY座標\t\r\n";
                for(int k=0;k<i;k++)
                {
                    textBox1.Text += name[k] + "\t" + num[k] + "\t" + coordinate[k, 0] + "\t" + coordinate[k, 1] + "\t\r\n";
                }
            }

        }
    }
}
