<h1 align="center">Guitar-Shop-Inventory</h1>


<p align="center"><b>📇 Details </b></p>
<p align="center">Performed CRUD operations with a team of 3 members to maintain updated records</p>
<p align="center">Conducted queries on the my_guitar_shop database, which stores customer information and the inventory of a theoretical guitar store</p>
<p align="center">Developed databases that support a small-scale non-trivial web-enabled application</p>

## 📇 Details 
The source of the network data comes from the Twitter API (developer.twitter.com). From retrieving the data using the Twitter API, I set the target Twitter account to @PlayValorant. I then proceeded to enable the code to look throughout the first 50 friends of the account and then the first 50 of the already checked accounts. By collecting data in this way, it can be determined if the friends selected have a connection with each other based on the following status. The nodes in the network represent the different entities of the first 50 friends and the edges represent the connection the friends have with each other (following status). After I gather this data, I checked to see how many total nodes and edges were represented in the graph. The network resulted in 1528 nodes and 1869 edges.

## 🚫 Lessons Learned
Overall, we learned how to create a web-based application using PHP and MySQL effectively. More importantly, we now better understand the concept of a primary key in the database. You cannot delete a primary key from one table without removing all the dependencies that other tables have on that key. While the class was focused on PHP, most of the team picked up a lot of new knowledge regarding SQL operations and database design management. We also learned how to make the code modular and recyclable to program and debug efficiently. Much of the features use similar processes with the variables adjusted accordingly. These are valuable lessons the team will use on future projects moving forward.

## 🧗 Challenges
The first challenge was to make the Xampp application run correctly in the different Operating Systems (Windows and Mac). Passing this Xampp challenge, our initial algorithm to structure the code was easy to conceptualize. Still, we had to spend more time understanding and incorporating MySQL into HTML and PHP files. This was extra challenging as you had to include the syntax from three different languages, often in the same lines of code. Switching between the three with only novice experience took some time and was prone to errors such as forgetting to close quotes. In addition, We had to learn how to import a database into PHP and have the dataset displayed based on a selection made by the user and show it in a viewable table. While this was easy in the SQL test area, it was harder to connect in PHP. Many data types had to be converted, and we had to find just the correct input type for each variable. One of the most significant issues in getting the code to run was getting the update and delete queries to run. We were able to test our queries individually and test that our variables contained the proper values, but we continued to get an error while running the code. After discovering that our keys were locked, we manually spent upwards of an hour trying to unlock them in my PHP admin. We tried everything from unlocking them using the GUI to even running code. After some research and some pure luck, we discovered the key restraints were coded into the creation file and had to be commented out whenever the database was reset. Finally, our original code was very manual in the sense that you had to have a prewritten set of questions ready to input for the script to have something to display. Depending on how many questions you had in the file, you had to set an iterator inside the script to that number. The next version of our code allowed for auto incrementation of certain unique variables. Unfortunately due to the constraints of the project, we had to make a choice between adding support to all tables and dropping a feature, or building full functionality to just one table. We decided to go with the later as it allowed us to demonstrate our full knowledge from the class as well as better test the quality of the code.

## 👷 Built With

![image](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

![image](https://img.shields.io/badge/VSCode-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white)

![image](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)


## 📚 Article
- [Medium](https://medium.com/@tejat/guitar-store-inventory-7f6f836b547a "Click me to read my Medium article!")


## 🧑🏻 Authors

**Teja Tammali, Betty Kouadio, Miguel Mayo, Zain Beg**

<a href="mailto:tejat18@umd.edu"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white"/></a> 

[![Hey](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/tejatammali/ "Welcome to my Linkedin!")

[![name](https://img.shields.io/badge/Medium-12100E?style=for-the-badge&logo=medium&logoColor=white)](https://medium.com/@tejat "My Medium Profile")

