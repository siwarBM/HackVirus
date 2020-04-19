package com.example.covid19;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

public class corps extends AppCompatActivity {
    private Button btnChangePasswordView, btnRemoveUser, btnChangePassword, btnGoBack, btnLogOut;
    private TextView tvEmail;
    private EditText etNewPassword;
    private ProgressBar progressBar;
    private FirebaseAuth fireAuth;
    private FirebaseUser fireUser;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_corps);
        init();
        setStartVisibility();
    }

    // Initialisations
    private void init() {
        btnChangePasswordView = (Button) findViewById(R.id.change_password_button);
        btnRemoveUser = (Button) findViewById(R.id.remove_user_button);
        btnChangePassword = (Button) findViewById(R.id.changePass);
        btnGoBack = (Button) findViewById(R.id.go_back);
        btnLogOut = (Button) findViewById(R.id.sign_out);
        etNewPassword = (EditText) findViewById(R.id.newPassword);
        progressBar = (ProgressBar) findViewById(R.id.progressBar);
        //get firebase fireAuth instance
        fireAuth = FirebaseAuth.getInstance();
        tvEmail = (TextView) findViewById(R.id.useremail);
        //get current fireUser
        fireUser = FirebaseAuth.getInstance().getCurrentUser();
        tvEmail.setText("User: " + fireUser.getEmail());
        authListener = new FirebaseAuth.AuthStateListener() {
            @Override
            public void onAuthStateChanged(@NonNull FirebaseAuth firebaseAuth) {
                FirebaseUser user = firebaseAuth.getCurrentUser();
                if (user == null) {
                    // fireUser fireAuth state is changed - fireUser is null
                    // launch login activity
                    startActivity(new Intent(corps.this, Login.class));
                    finish();
                }
            }
        };
    }

    // Set Starting Visibility
    private void setStartVisibility() {
        etNewPassword.setVisibility(View.GONE);
        btnChangePassword.setVisibility(View.GONE);
        btnGoBack.setVisibility(View.GONE);
        if (progressBar != null) {
            progressBar.setVisibility(View.GONE);
        }
    }


    // this listener is called when there is change in firebase fireUser session
    FirebaseAuth.AuthStateListener authListener = new FirebaseAuth.AuthStateListener() {
        @SuppressLint("SetTextI18n")
        @Override
        public void onAuthStateChanged(@NonNull FirebaseAuth firebaseAuth) {
            FirebaseUser user = firebaseAuth.getCurrentUser();
            if (user == null) {
                // fireUser fireAuth state is changed - fireUser is null
                // launch login activity
                startActivity(new Intent(corps.this, Login.class));
                finish();
            } else {
                tvEmail.setText("User: " + user.getEmail());

            }
        }
    };


    public void changePasswordFunc(final View view) {
        progressBar.setVisibility(View.VISIBLE);
            if (etNewPassword.getText().toString().trim().length() < 6) {
                etNewPassword.setError("Password too short, enter minimum 6 characters");
                progressBar.setVisibility(View.GONE);
            } else {
                fireUser.updatePassword(etNewPassword.getText().toString().trim())
                        .addOnCompleteListener(new OnCompleteListener<Void>() {
                            @Override
                            public void onComplete(@NonNull Task<Void> task) {
                                if (task.isSuccessful()) {
                                    Toast.makeText(corps.this, "Password is updated, sign in with new Password!", Toast.LENGTH_SHORT).show();
                                    logOutFunc(view);
                                    progressBar.setVisibility(View.GONE);
                                } else {
                                    Toast.makeText(corps.this, "Failed to update Password!", Toast.LENGTH_SHORT).show();
                                    progressBar.setVisibility(View.GONE);
                                }
                            }
                        });
            }

        }



    public void goBackFunc(View view) {
        btnChangePasswordView.setVisibility(View.VISIBLE);
        btnLogOut.setVisibility(View.VISIBLE);
        etNewPassword.setVisibility(View.GONE);
        btnChangePassword.setVisibility(View.GONE);
        btnGoBack.setVisibility(View.GONE);
        btnRemoveUser.setVisibility(View.VISIBLE);
    }


    public void changePasswordViewFunc(View view) {
        btnChangePasswordView.setVisibility(View.GONE);
        btnLogOut.setVisibility(View.GONE);
        etNewPassword.setVisibility(View.VISIBLE);
        btnChangePassword.setVisibility(View.VISIBLE);
        btnGoBack.setVisibility(View.VISIBLE);
        btnRemoveUser.setVisibility(View.GONE);
    }


    public void removeUserFunc(View view) {
        progressBar.setVisibility(View.VISIBLE);
        if (fireUser != null) {
            fireUser.delete()
                    .addOnCompleteListener(new OnCompleteListener<Void>() {
                        @Override
                        public void onComplete(@NonNull Task<Void> task) {
                            if (task.isSuccessful()) {
                                Toast.makeText(corps.this, "Your profile is deleted :( Create an account now!", Toast.LENGTH_SHORT).show();
                                startActivity(new Intent(corps.this, SignUpActivity.class));
                                finish();
                                progressBar.setVisibility(View.GONE);
                            } else {
                                Toast.makeText(corps.this, "Failed to delete your account!", Toast.LENGTH_SHORT).show();
                                progressBar.setVisibility(View.GONE);
                            }
                        }
                    });
        }
    }


    public void logOutFunc(View view) {
        fireAuth.signOut();
        // this listener will be called when there is change in firebase fireUser session
        FirebaseAuth.AuthStateListener authListener = new FirebaseAuth.AuthStateListener() {
            @Override
            public void onAuthStateChanged(@NonNull FirebaseAuth firebaseAuth) {
                FirebaseUser user = firebaseAuth.getCurrentUser();
                if (user == null) {
                    // fireUser fireAuth state is changed - fireUser is null
                    // launch login activity
                    startActivity(new Intent(corps.this, Login.class));
                    finish();
                }
            }
        };
    }


    @Override
    protected void onResume() {
        super.onResume();
        progressBar.setVisibility(View.GONE);
    }


    @Override
    public void onStart() {
        super.onStart();
        fireAuth.addAuthStateListener(authListener);
    }


    @Override
    public void onStop() {
        super.onStop();
        if (authListener != null) {
            fireAuth.removeAuthStateListener(authListener);
        }
    }
}