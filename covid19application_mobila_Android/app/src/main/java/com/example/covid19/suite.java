package com.example.covid19;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import androidx.appcompat.app.AppCompatActivity;

public class suite extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_suite);
    }


    public void bien(View view) {
        startActivity(new Intent(suite.this, corps.class));
    }

    public void bien2(View view) {
        startActivity(new Intent(suite.this, carfour.class));
    }

    public void bien3(View view) {
        startActivity(new Intent(suite.this, mg.class));
    }
    public void bien4(View view) {
        startActivity(new Intent(suite.this, monoprix.class));
    }
}
